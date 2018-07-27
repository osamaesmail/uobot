<?php


namespace UO\UOBot\Templates;


class ListTemplate extends Template
{
    protected $template_type='list';
    protected $top_element_style;
    protected $buttons;
    protected $elements;
    protected $sharable;

    /**
     * @return mixed
     */
    public function get_top_element_style()
    {
        return $this->top_element_style;
    }

    /**
     * @param mixed $top_element_style
     */
    public function set_top_element_style($top_element_style)
    {
        $this->top_element_style = $top_element_style;
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

    /**
     * @return mixed
     */
    public function get_elements()
    {
        return $this->elements;
    }

    /**
     * @param mixed $elements
     */
    public function set_elements(array $elements)
    {
        $this->elements = $elements;
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