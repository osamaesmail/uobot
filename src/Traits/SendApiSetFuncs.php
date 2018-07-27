<?php


namespace UO\UOBot\Traits;


trait SendApiSetFuncs
{

    public function set_notification_type($notification_type)
    {
        $this->sendApi->set_notification_type($notification_type);
    }

    public function set_messaging_type($messaging_type)
    {
        $this->sendApi->set_messaging_type($messaging_type);
    }

    public function set_tag($tag)
    {
        $this->sendApi->set_tag($tag);
    }

}