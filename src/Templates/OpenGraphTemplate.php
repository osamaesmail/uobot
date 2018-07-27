<?php


namespace UO\UOBot\Templates;


class OpenGraphTemplate extends Template
{
    protected $template_type='open_graph';
    protected $elements;

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
}