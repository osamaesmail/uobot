<?php


namespace UO\UOBot;


class Config
{

    protected static $token;

    public static function setToken($token){
        self::$token=$token;
    }

    public static function getToken()
    {
        return self::$token;
    }
}