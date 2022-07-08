<?php

namespace App\Middleware;
require_once '../helpers/RequestHelper.php';
use App\Services\HomeWork\Sessions\GetDataUser;
use App\Services\Sessions\Session;

class AuthMiddleware
{

    public static function Auth()
    {
        if (empty($_SESSION['login']) && \RequestHelper::getUrl() == '/login') return true;
        if (empty($_SESSION['login']) && \RequestHelper::getUrl() == '/login/store') return true;
        if (empty($_SESSION['login'])){
            return \RequestHelper::redirect('/login');
        } else {
            if (\RequestHelper::getUrl() == '/login') return \RequestHelper::redirect('/');
            $user = new Session('login');
            echo GetDataUser::getTime() . $user->get();
            return true;
        }
    }
}