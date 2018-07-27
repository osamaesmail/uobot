<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 12/07/2018
 * Time: 11:10 ص
 */

namespace UO\UOBot\Api;

use UO\UOBot\Config;
use UO\UOBot\Http\Response;


/**
 * Class Api
 * @package UOBot\Api
 */
class Api implements \JsonSerializable
{

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function send(){
        Response::send($this);
    }

    protected function getToken()
    {
        if(!Config::getToken())
            @die('token is empty');

        return Config::getToken();
    }

    public function getUrl(){}


    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        $obj=new \stdClass();
        foreach ($this as $key=> $value)
        {
            if($value)
                $obj->$key=$value;
        }
        return get_object_vars($obj);
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this);
    }



}