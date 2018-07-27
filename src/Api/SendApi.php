<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 12/07/2018
 * Time: 11:12 ص
 */

namespace UO\UOBot\Api;

use UO\UOBot\SendApi\Message;
use UO\UOBot\SendApi\Recipient;

/**
 * Class SendApi
 * @package UOBot\Api
 */
class SendApi extends Api
{

    protected $messaging_type;
    protected $recipient;
    protected $message;
    protected $sender_action;
    protected $notification_type;
    protected $tag;


    public function getUrl()
    {
        $url='https://graph.facebook.com/v2.6/me/messages?access_token=';
        return $url.$this->getToken();
    }

    /**
     * @return mixed
     */
    public function get_messaging_type()
    {
        return $this->messaging_type;
    }

    /**
     * @param mixed $messaging_type
     */
    public function set_messaging_type($messaging_type)
    {
        $this->messaging_type = $messaging_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_recipient()
    {
        return $this->recipient;
    }

    /**
     * @param mixed $recipient
     */
    public function set_recipient(Recipient $recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_message()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function set_message(Message $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_sender_action()
    {
        return $this->sender_action;
    }

    /**
     * @param mixed $sender_action
     */
    public function set_sender_action($sender_action)
    {
        $this->sender_action = $sender_action;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_notification_type()
    {
        return $this->notification_type;
    }

    /**
     * @param mixed $notification_type
     */
    public function set_notification_type($notification_type)
    {
        $this->notification_type = $notification_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_tag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function set_tag($tag)
    {
        $this->tag = $tag;

        return $this;
    }


    /**
     * @param $message
     * @return mixed
     */
    public static function parse($message)
    {
        if(is_string($message))
            return Message::create()->set_text($message);

        else if($message instanceof Api)
            return $message;

        else
            @die('error message');
    }


    public function copy()
    {
        return clone $this;
    }


}