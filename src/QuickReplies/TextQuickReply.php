<?php


namespace UO\UOBot\QuickReplies;


class TextQuickReply extends QuickReply
{
    protected $content_type='text';
    protected $title;
    protected $payload;
    protected $image_url;

    /**
     * @return mixed
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function set_title($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_payload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function set_payload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_image_url()
    {
        return $this->image_url;
    }

    /**
     * @param mixed $image_url
     */
    public function set_image_url($image_url)
    {
        $this->image_url = $image_url;
        return $this;
    }
}