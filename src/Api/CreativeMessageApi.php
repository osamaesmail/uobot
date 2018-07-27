<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 15/07/2018
 * Time: 01:21 م
 */

namespace UO\UOBot\Api;


class CreativeMessageApi extends Api
{

    protected $messages;

    public function getUrl()
    {
        $url='https://graph.facebook.com/v2.11/me/message_creatives?access_token=';
        return $url.$this->getToken();
    }

    /**
     * @return mixed
     */
    public function get_messages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function set_messages($messages)
    {
        $this->messages = $messages;
        return $this;
    }



}