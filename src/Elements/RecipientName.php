<?php

namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class RecipientName extends Api
{
    protected $first_name;
    protected $last_name;

    /**
     * @return mixed
     */
    public function get_first_name()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_last_name()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }
}