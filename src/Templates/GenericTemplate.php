<?php


namespace UO\UOBot\Templates;


class GenericTemplate extends Template
{
    protected $template_type='generic';
    protected $sharable;
    protected $image_aspect_ratio;
    protected $elements;

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

    /**
     * @return mixed
     */
    public function get_image_aspect_ratio()
    {
        return $this->image_aspect_ratio;
    }

    /**
     * @param mixed $image_aspect_ratio
     */
    public function set_image_aspect_ratio($image_aspect_ratio)
    {
        $this->image_aspect_ratio = $image_aspect_ratio;
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

}