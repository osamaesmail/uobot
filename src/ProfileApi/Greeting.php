<?php

namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class Greeting extends Api
{
    protected $locale='default';
    protected $text;

    /**
     * @return mixed
     */
    public function get_locale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     */
    public function set_locale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_text()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function set_text($text)
    {
        $this->text = $text;
        return $this;
    }
}