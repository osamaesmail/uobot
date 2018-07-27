<?php


namespace UO\UOBot\Buttons;


class LogInButton extends Button
{
    protected $type='account_link';
    protected $url;

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
}