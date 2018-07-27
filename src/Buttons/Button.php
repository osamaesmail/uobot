<?php


namespace UO\UOBot\Buttons;


use UO\UOBot\Api\Api;

abstract class Button extends Api
{
    protected $type;

    public static function create()
    {
        return new static();
    }
}