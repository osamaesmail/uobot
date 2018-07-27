<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class ReceiptElement extends Api
{
    protected $title;
    protected $subtitle;
    protected $price;
    protected $quantity;
    protected $currency;
    protected $image_url;

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
    public function get_price()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function set_price($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_currency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function set_currency($currency)
    {
        $this->currency = $currency;
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
    public function get_quantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

}