<?php


namespace UO\UOBot\Api;


use UO\UOBot\Http\Curl;

class GraphApi extends Api
{
    protected $psid;
    protected $fields;

    public function getUrl()
    {
        $url="https://graph.facebook.com/$this->psid?$this->fields&access_token=";
        return $url.$this->getToken();
    }

    /**
     * @return mixed
     */
    public function get_psid()
    {
        return $this->psid;
    }

    /**
     * @param mixed $psid
     */
    public function set_psid($psid)
    {
        $this->psid = $psid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_fields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     */
    public function set_fields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function get(){
        return json_decode(Curl::create()
            ->set_url($this->getUrl())
            ->get());
    }
}