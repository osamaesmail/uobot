<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class OpenGraphElement extends Api
{
    protected $url;
    protected $buttons;

    /**
     * @return mixed
     */
    public function get_url()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function set_url($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_buttons()
    {
        return $this->buttons;
    }

    /**
     * @param mixed $buttons
     */
    public function set_buttons(array $buttons)
    {
        $this->buttons = $buttons;
        return $this;
    }
}