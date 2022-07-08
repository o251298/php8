<?php

namespace App\Services\HomeWork\Sessions;
require_once '../helpers/RequestHelper.php';
class GetDataUser
{
    public static function getTime()
    {
        if ((date('H') >= 5) && (date('H') < 11)){
            return "Доброе утро ";
        } elseif ((date('H') >= 11) && (date('H') < 16))
        {
            return "Добрый день ";
        }
        elseif ((date('H') >= 16) && (date('H') <= 23))
        {
            return "Добрый вечер ";
        } elseif ((date('H') >= 0) && (date('H') < 5))
        {
            return "Доброй ночи ";
        }
    }

    public static function closeBrowser($name)
    {
        if (preg_match('/' . $name .'/', \RequestHelper::getUserInfo()))
        {
            die("CLOSE FOR YOU");
        } else {
            return true;
        }
    }
}