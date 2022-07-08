<?php
namespace App\Services\Router;
use App\Middleware\AuthMiddleware;

class Router
{
    public function getUrl()
    {
        $url = trim($_SERVER["REQUEST_URI"], '/');
        return $url;
    }

    public function run()
    {
        $router = require '../routes/routes.php';
        $newPath = null;

        foreach ($router as $urlPattern => $action)
        {
            if (preg_match("~$urlPattern~", $this->getUrl()))
            {
                $newPath = preg_replace("~$urlPattern~", $action, $this->getUrl());
                $segments = explode('/', $newPath);
                $class = array_shift($segments);
                $method = array_shift($segments);
                $param = $segments;
                $className = "\\App\\Controllers\\" . ucfirst($class) . 'Controller';
                $methodName = $method;
                if (class_exists($className)){
                    $classObj = new $className;
                    if (method_exists($classObj, $methodName)){
                        $post = $_POST;
                        $get = $_GET;
                        $param["post"] = $post;
                        $param["get"] = $get;
                        AuthMiddleware::Auth();
                        call_user_func(array($classObj, $methodName), $param);
                    } else {
                        echo 'method not exist';
                    }
                } else {
                    echo 'class not exist';
                }
                return $newPath;
            }
        }

        if ($newPath === null)
        {
            echo 'error';
        }
    }
}