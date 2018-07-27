<?php


namespace UO\UOBot\Elements;



use UO\UOBot\Api\Api;

class TemplateElement extends Api
{
    protected $title;
    protected $subtitle;
    protected $image_url;
    protected $default_action;
    protected $buttons;

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
    public function get_subtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function set_subtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_image_url()
    {
        return $this->image_url;
    }

    /**
     * @param mixed $image_url
     */
    public function set_image_url($image_url)
    {
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_default_action()
    {
        return $this->default_action;
    }

    /**
     * @param mixed $default_action
     */
    public function set_default_action($default_action)
    {
        $this->default_action = $default_action;
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