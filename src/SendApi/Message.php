<?php

namespace UO\UOBot\SendApi;


use UO\UOBot\Api\Api;
use UO\UOBot\Api\SendApi;

class Message extends Api
{
    protected $text;
    protected $attachment;
    protected $quick_replies;
    protected $metadata;

    /**
     * @return mixed
     */
    public function get_text()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function set_text($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_attachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function set_attachment($attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_quick_replies()
    {
        return $this->quick_replies;
    }

    /**
     * @param mixed $quick_replies
     */
    public function set_quick_replies(array $quick_replies)
    {
        $this->quick_replies = $quick_replies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_metadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function set_metadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function toSendApi(SendApi $sendApi)
    {
        return $sendApi
            ->set_message($this);
    }

}