<?php


namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class HomeUrl extends Api
{
    protected $url;
    protected $webview_height_ratio;
    protected $webview_share_button;
    protected $in_test;

    /**
     * @return mixed
     */
    public function get_url()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function set_url($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_webview_height_ratio()
    {
        return $this->webview_height_ratio;
    }

    /**
     * @param mixed $webview_height_ratio
     */
    public function set_webview_height_ratio($webview_height_ratio)
    {
        $this->webview_height_ratio = $webview_height_ratio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_webview_share_button()
    {
        return $this->webview_share_button;
    }

    /**
     * @param mixed $webview_share_button
     */
    public function set_webview_share_button($webview_share_button)
    {
        $this->webview_share_button = $webview_share_button;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_in_test()
    {
        return $this->in_test;
    }

    /**
     * @param mixed $in_test
     */
    public function set_in_test($in_test)
    {
        $this->in_test = $in_test;
        return $this;
    }
}