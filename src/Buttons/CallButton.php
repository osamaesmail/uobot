<?php


namespace UO\UOBot\Buttons;


class CallButton extends Button
{
    protected $type='phone_number';
    protected $title;
    protected $payload;

    /**
     * @return mixed
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function set_title($title)
    {
        $this->title = $title;
        return $this;
    }

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

}