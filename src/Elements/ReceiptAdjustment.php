<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class ReceiptAdjustment extends Api
{
    protected $name;
    protected $amount;

    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function set_name($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_amount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function set_amount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}