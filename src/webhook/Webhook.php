<?php

namespace UO\UOBot\Webhook;


class Webhook
{
    public static function verify($token)
    {
        if(isset($_REQUEST['hub_challenge'])&&$_REQUEST['hub_verify_token']==$token){
            echo $_REQUEST['hub_challenge'];
        }
    }
}