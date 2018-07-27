<?php


namespace UO\UOBot\Http;


class Curl
{
    protected $url;
    protected $body;

    /**
     * @param mixed $url
     */
    public function set_url($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param mixed $message
     */
    public function set_body($body)
    {
        $this->body = $body;

        return $this;
    }

    public static function create()
    {
        return new self();
    }

    public function post(){
        $ch=curl_init($this->url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$this->body);
        curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
        curl_exec($ch);
        curl_close($ch);
    }


    public function get(){

        return file_get_contents($this->url);

    }

}