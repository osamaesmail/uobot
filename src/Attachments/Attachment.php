<?php


namespace UO\UOBot\Attachments;


use UO\UOBot\Api\Api;
use UO\UOBot\Api\SendApi;
use UO\UOBot\SendApi\Message;
use UO\UOBot\SendApi\Recipient;

abstract class Attachment extends Api
{
    protected $type;
    protected $payload;

    /**
     * @return mixed
     */
    public function get_payload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function set_payload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_type()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function set_type($type)
    {
        $this->type = $type;
        return $this;
    }



    public function toSendApi(SendApi $sendApi)
    {
        return $sendApi
            ->set_message(
                Message::create()
                ->set_attachment($this)
            );
    }
}