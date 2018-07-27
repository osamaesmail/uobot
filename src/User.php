<?php


namespace UO\UOBot;


use UO\UOBot\Api\GraphApi;

class User
{

    protected $response;

    protected $psid;

    protected $fields=[
        'first_name,',
        'last_name,',
        'profile_pic,',
        'locale,',
        'timezone,',
        'gender',
    ];


    public function __construct($psid)
    {
        $this->psid=$psid;
        $this->response= $this->get();
    }


    public function first_name()
    {
        return $this->response->first_name;
    }

    public function last_name()
    {
        return $this->response->last_name;
    }

    public function profile_pic()
    {
        return $this->response->profile_pic;
    }

    public function timezone()
    {
        return $this->response->timezone;
    }

    public function gender()
    {
        return $this->response->gender;
    }


    private function refactor_fields(){

        $fields='fields=';
        for ($i=0; $i<($fieldsCount= count($this->fields)); $i++)
        {
            $fields.=$this->fields[$i];
        }
        return $fields;

    }

    public function get()
    {

        $fields=$this->refactor_fields($this->fields);

        return GraphApi::create()
            ->set_psid($this->psid)
            ->set_fields($fields)
            ->get();
    }

}