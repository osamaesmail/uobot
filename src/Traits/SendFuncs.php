<?php


namespace UO\UOBot\Traits;


use UO\UOBot\Api\BroadcastApi;
use UO\UOBot\Api\SendApi;

trait SendFuncs
{

    public function send($message)
    {
        SendApi::parse($message)
            ->toSendApi($this->sendApi->copy())
            ->send();

        return $this;

    }

    public function seen()
    {
        $this->sendApi
            ->copy()
            ->set_sender_action('mark_seen')
            ->send();

        return $this;
    }

    public function typing_on()
    {
        $this->sendApi
            ->copy()
            ->set_sender_action('typing_on')
            ->send();

        return $this;
    }

    public function typing_off()
    {
        $this->sendApi
            ->copy()
            ->set_sender_action('typing_off')
            ->send();

        return $this;
    }

//    public static function broadcast($message_creative_id)
//    {
//        BroadcastApi::create()
//            ->set_message_creative_id($message_creative_id)
//            ->send();
//    }

}