<?php

namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class PaymentSettings extends Api
{
    protected $privacy_url;
    protected $public_key;
    protected $testers;

    /**
     * @return mixed
     */
    public function get_privacy_url()
    {
        return $this->privacy_url;
    }

    /**
     * @param mixed $privacy_url
     */
    public function set_privacy_url($privacy_url)
    {
        $this->privacy_url = $privacy_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_public_key()
    {
        return $this->public_key;
    }

    /**
     * @param mixed $public_key
     */
    public function set_public_key($public_key)
    {
        $this->public_key = $public_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_testers()
    {
        return $this->testers;
    }

    /**
     * @param mixed $testers
     */
    public function set_testers(array $testers)
    {
        $this->testers = $testers;
        return $this;
    }
}