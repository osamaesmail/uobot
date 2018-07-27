<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class ReceiptSummary extends Api
{
    protected $subtotal;
    protected $shipping_cost;
    protected $total_tax;
    protected $total_cost;

    /**
     * @return mixed
     */
    public function get_subtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal
     */
    public function set_subtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_shipping_cost()
    {
        return $this->shipping_cost;
    }

    /**
     * @param mixed $shipping_cost
     */
    public function set_shipping_cost($shipping_cost)
    {
        $this->shipping_cost = $shipping_cost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_total_tax()
    {
        return $this->total_tax;
    }

    /**
     * @param mixed $total_tax
     */
    public function set_total_tax($total_tax)
    {
        $this->total_tax = $total_tax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_total_cost()
    {
        return $this->total_cost;
    }

    /**
     * @param mixed $total_cost
     */
    public function set_total_cost($total_cost)
    {
        $this->total_cost = $total_cost;
        return $this;
    }
}