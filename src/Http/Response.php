<?php


namespace UO\UOBot\Http;


use UO\UOBot\Api\Api;

class Response
{

    public static function send(Api $api)
    {

        Curl::create()
            ->set_url($api->getURL())
            ->set_body($api->toJson())
            ->post();

    }

}