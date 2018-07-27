<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class ButtonPaymentSummary extends Api
{
    protected $currency;
    protected $is_test_payment;
    protected $payment_type;
    protected $merchant_name;
    protected $requested_user_info;
    protected $price_list;

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
    public function get_is_test_payment()
    {
        return $this->is_test_payment;
    }

    /**
     * @param mixed $is_test_payment
     */
    public function set_is_test_payment($is_test_payment)
    {
        $this->is_test_payment = $is_test_payment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_payment_type()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function set_payment_type($payment_type)
    {
        $this->payment_type = $payment_type;
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
    public function get_requested_user_info()
    {
        return $this->requested_user_info;
    }

    /**
     * @param mixed $requested_user_info
     */
    public function set_requested_user_info(array $requested_user_info)
    {
        $this->requested_user_info = $requested_user_info;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_price_list()
    {
        return $this->price_list;
    }

    /**
     * @param mixed $price_list
     */
    public function set_price_list(array $price_list)
    {
        $this->price_list = $price_list;
        return $this;
    }
}