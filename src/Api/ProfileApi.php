<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 12/07/2018
 * Time: 11:13 ص
 */

namespace UO\UOBot\Api;


class ProfileApi extends Api
{
    protected $account_linking_url;
    protected $persistent_menu;
    protected $get_started;
    protected $greeting;
    protected $whitelisted_domains;
    protected $payment_settings;
    protected $target_audience;
    protected $home_url;


    public function getUrl()
    {
        $url='https://graph.facebook.com/v2.6/me/messenger_profile?access_token=';
        return $url.$this->getToken();
    }


    /**
     * @return mixed
     */
    public function get_account_linking_url()
    {
        return $this->account_linking_url;
    }

    /**
     * @param mixed $account_linking_url
     */
    public function set_account_linking_url($account_linking_url)
    {
        $this->account_linking_url = $account_linking_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_persistent_menu()
    {
        return $this->persistent_menu;
    }

    /**
     * @param mixed $persistent_menu
     */
    public function set_persistent_menu(array $persistent_menu)
    {
        $this->persistent_menu = $persistent_menu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_get_started()
    {
        return $this->get_started;
    }

    /**
     * @param mixed $get_started
     */
    public function set_get_started($get_started)
    {
        $this->get_started = $get_started;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_greeting()
    {
        return $this->greeting;
    }

    /**
     * @param mixed $greeting
     */
    public function set_greeting(array $greeting)
    {
        $this->greeting = $greeting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_whitelisted_domains()
    {
        return $this->whitelisted_domains;
    }

    /**
     * @param mixed $whitelisted_domains
     */
    public function set_whitelisted_domains($whitelisted_domains)
    {
        $this->whitelisted_domains = $whitelisted_domains;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_payment_settings()
    {
        return $this->payment_settings;
    }

    /**
     * @param mixed $payment_settings
     */
    public function set_payment_settings($payment_settings)
    {
        $this->payment_settings = $payment_settings;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_target_audience()
    {
        return $this->target_audience;
    }

    /**
     * @param mixed $target_audience
     */
    public function set_target_audience($target_audience)
    {
        $this->target_audience = $target_audience;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_home_url()
    {
        return $this->home_url;
    }

    /**
     * @param mixed $home_url
     */
    public function set_home_url($home_url)
    {
        $this->home_url = $home_url;
        return $this;
    }
}