<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class ReceiptAdress extends Api
{
    protected $street_1;
    protected $street_2;
    protected $city;
    protected $postal_code;
    protected $state;
    protected $country;

    /**
     * @return mixed
     */
    public function get_street_1()
    {
        return $this->street_1;
    }

    /**
     * @param mixed $street_1
     */
    public function set_street_1($street_1)
    {
        $this->street_1 = $street_1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_street_2()
    {
        return $this->street_2;
    }

    /**
     * @param mixed $street_2
     */
    public function set_street_2($street_2)
    {
        $this->street_2 = $street_2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_city()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function set_city($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_postal_code()
    {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function set_postal_code($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_state()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function set_state($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_country()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function set_country($country)
    {
        $this->country = $country;
        return $this;
    }
}