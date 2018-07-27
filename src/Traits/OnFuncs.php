<?php


namespace UO\UOBot\Traits;


use UO\UOBot\Http\Request;

trait OnFuncs
{

    public static function on($condition,callable $callback)
    {
        if(!self::$triggered&&$condition)
        {
            self::$triggered=true;
            call_user_func($callback,self::to(Request::getSender()));
        }
    }

    public static function onMessage($message,callable $callback)
    {
        self::on(!self::$triggered&&preg_match("/$message/",Request::getMessageText()), $callback
        );
    }

    public static function onPostback($payload,$callback)
    {
        self::on(!self::$triggered&&preg_match("/$payload/",Request::getPostbackPayload()), $callback);
    }

    public static function onQuickReply($payload,$callback)
    {
        self::on(!self::$triggered&&preg_match("/$payload/",Request::getQuickReply()),$callback);
    }

}