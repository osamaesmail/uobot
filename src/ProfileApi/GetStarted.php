<?php

namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class GetStarted extends Api
{

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

    public function toProfileApi()
    {

    }

}