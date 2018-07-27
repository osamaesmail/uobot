<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 15/07/2018
 * Time: 12:06 م
 */

namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class DynamicText extends Api
{
    protected $text;
    protected $fallback_text;

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

    /**
     * @return mixed
     */
    public function get_fallback_text()
    {
        return $this->fallback_text;
    }

    /**
     * @param mixed $fallback_text
     */
    public function set_fallback_text($fallback_text)
    {
        $this->fallback_text = $fallback_text;
        return $this;
    }
}