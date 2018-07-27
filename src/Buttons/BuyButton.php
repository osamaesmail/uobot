<?php

namespace UO\UOBot\Buttons;


class BuyButton extends Button
{
    protected $type='payment';
    protected $title;
    protected $payload;
    protected $payment_summary;

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
    public function get_payload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function set_payload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_payment_summary()
    {
        return $this->payment_summary;
    }

    /**
     * @param mixed $payment_summary
     */
    public function set_payment_summary($payment_summary)
    {
        $this->payment_summary = $payment_summary;
        return $this;
    }


}