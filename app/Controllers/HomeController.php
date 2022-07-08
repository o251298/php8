<?php


namespace App\Controllers;
require_once '../helpers/RequestHelper.php';
use App\Services\Debugger\BasicDebugger;
use App\Exceptions\Interfaces\ITypeException;
use App\Services\Sessions\Session;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home/index', ['test' => 12]);
    }
    public function login()
    {
        return $this->render('auth/login', ['test' => 12]);
    }
    public function login_store()
    {
       $session = new Session('login');
       if (!$session->check()) $session->create(\RequestHelper::getPost()['login']);
       return \RequestHelper::redirect('/');
    }

    public function login_unset()
    {
        $session = new Session('login');
        $session->delete();
        return \RequestHelper::redirect('/login');
    }
}