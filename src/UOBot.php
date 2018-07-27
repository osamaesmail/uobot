<?php


namespace UO\UOBot;


use UO\UOBot\Api\SendApi;
use UO\UOBot\SendApi\Recipient;
use UO\UOBot\Traits\OnFuncs;
use UO\UOBot\Traits\SendApiSetFuncs;
use UO\UOBot\Traits\SendFuncs;

class UOBot
{

    protected static $triggered=false;
    protected $sendApi;
    protected $user;

    use SendApiSetFuncs;
    use OnFuncs;
    use SendFuncs;


    public function __construct($recipient)
    {
        $this->sendApi=SendApi::create()
            ->set_recipient(
                Recipient::create()->set_id($recipient)
            );
    }


    public static function to($recipient)
    {
        return new self($recipient);
    }


    public function wait($seconds)
    {
        sleep($seconds);

        return $this;
    }

    public function user(){
        if(!$this->user)
            $this->user=new User($this->sendApi->get_recipient()->get_id());

        return $this->user;
    }

}