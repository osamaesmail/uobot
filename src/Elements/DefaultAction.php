<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class DefaultAction extends Api
{
    protected $type='web_url';
    protected $url;
    protected $webview_height_ratio;
    protected $messenger_extensions;
    protected $fallback_url;
    protected $webview_share_button;

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
    public function get_messenger_extensions()
    {
        return $this->messenger_extensions;
    }

    /**
     * @param mixed $messenger_extensions
     */
    public function set_messenger_extensions($messenger_extensions)
    {
        $this->messenger_extensions = $messenger_extensions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_fallback_url()
    {
        return $this->fallback_url;
    }

    /**
     * @param mixed $fallback_url
     */
    public function set_fallback_url($fallback_url)
    {
        $this->fallback_url = $fallback_url;
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
}