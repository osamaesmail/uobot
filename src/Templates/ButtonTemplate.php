<?php


namespace UO\UOBot\Templates;


class ButtonTemplate extends Template
{
    protected $template_type='button';
    protected $text;
    protected $buttons;
    protected $sharable;

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
    public function get_buttons()
    {
        return $this->buttons;
    }

    /**
     * @param mixed $buttons
     */
    public function set_buttons($buttons)
    {
        $this->buttons = $buttons;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_sharable()
    {
        return $this->sharable;
    }

    /**
     * @param mixed $sharable
     */
    public function set_sharable($sharable)
    {
        $this->sharable = $sharable;

        return $this;
    }
}