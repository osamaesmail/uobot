<?php

namespace UO\UOBot\SendApi;


use UO\UOBot\Api\Api;

class Recipient extends Api
{
    protected $id;
    protected $phone_number;
    protected $user_ref;
    protected $name;

    /**
     * @return mixed
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_phone_number()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function set_phone_number($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_user_ref()
    {
        return $this->user_ref;
    }

    /**
     * @param mixed $user_ref
     */
    public function set_user_ref($user_ref)
    {
        $this->user_ref = $user_ref;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function set_name(RecipientName $name)
    {
        $this->name = $name;

        return $this;
    }

}