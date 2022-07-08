<?php

class RequestHelper
{
    public static function getUrl()
    {
        return $_SERVER["REQUEST_URI"];
    }
    public static function getQuery()
    {
        return $_SERVER['QUERY_STRING'];
    }
    public static function getUserIP()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
    public static function getUserInfo()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }
    public static function redirect(string $url = null)
    {
        $location = $url ?? $_SERVER["HTTP_REFERER"];
        return header('Location: ' . $location);
    }
    public static function getPost()
    {
        return $_POST;
    }
    public static function getGET()
    {
        return $_GET;
    }
}