<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 12/07/2018
 * Time: 11:13 ص
 */

namespace UO\UOBot\Api;


class BroadcastApi extends Api
{

    protected $message_creative_id;
    protected $notification_type;
    protected $messaging_type='MESSAGE_TAG';
    protected $tag='NON_PROMOTIONAL_SUBSCRIPTION';

    public function getUrl()
    {
        $url='https://graph.facebook.com/v2.11/me/broadcast_messages?access_token=';
        return $url.$this->getToken();
    }

    /**
     * @return mixed
     */
    public function get_message_creative_id()
    {
        return $this->message_creative_id;
    }

    /**
     * @param mixed $message_creative_id
     */
    public function set_message_creative_id($message_creative_id)
    {
        $this->message_creative_id = $message_creative_id;
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

}