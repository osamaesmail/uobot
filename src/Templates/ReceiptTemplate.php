<?php


namespace UO\UOBot\Templates;


class ReceiptTemplate extends Template
{
    protected $template_type='receipt';
    protected $sharable;
    protected $recipient_name;
    protected $merchant_name;
    protected $order_number;
    protected $currency;
    protected $payment_method;
    protected $timestamp;
    protected $elements;
    protected $address;
    protected $summary;
    protected $adjustments;

    /**
     * @return string
     */
    public function get_template_type()
    {
        return $this->template_type;
    }

    /**
     * @param string $template_type
     */
    public function set_template_type($template_type)
    {
        $this->template_type = $template_type;
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

    /**
     * @return mixed
     */
    public function get_recipient_name()
    {
        return $this->recipient_name;
    }

    /**
     * @param mixed $recipient_name
     */
    public function set_recipient_name($recipient_name)
    {
        $this->recipient_name = $recipient_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_merchant_name()
    {
        return $this->merchant_name;
    }

    /**
     * @param mixed $merchant_name
     */
    public function set_merchant_name($merchant_name)
    {
        $this->merchant_name = $merchant_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_order_number()
    {
        return $this->order_number;
    }

    /**
     * @param mixed $order_number
     */
    public function set_order_number($order_number)
    {
        $this->order_number = $order_number;
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
    public function get_payment_method()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $payment_method
     */
    public function set_payment_method($payment_method)
    {
        $this->payment_method = $payment_method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_timestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function set_timestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
    public function get_address()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function set_address($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_summary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function set_summary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_adjustments()
    {
        return $this->adjustments;
    }

    /**
     * @param mixed $adjustments
     */
    public function set_adjustments(array $adjustments)
    {
        $this->adjustments = $adjustments;
        return $this;
    }
}