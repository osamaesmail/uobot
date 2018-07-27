<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 15/07/2018
 * Time: 01:14 م
 */

namespace UO\UOBot\URLAttachment;



use UO\UOBot\Api\Api;
use UO\UOBot\Api\SendApi;
use UO\UOBot\Attachments\URLAttachment;
use UO\UOBot\SendApi\Message;

abstract class URLPayload extends Api
{
    protected $url;
    protected $is_reusable;

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
    public function get_is_reusable()
    {
        return $this->is_reusable;
    }

    /**
     * @param mixed $is_reusable
     */
    public function set_is_reusable($is_reusable)
    {
        $this->is_reusable = $is_reusable;
        return $this;
    }

    public function toSendApi(SendApi $sendApi)
    {
        return $sendApi
            ->set_message(
                Message::create()
                    ->set_attachment($this)
            );
    }

    protected abstract function getParentType();

    public function jsonSerialize()
    {
        return URLAttachment::create()
            ->set_type($this->getParentType())
            ->set_payload(parent::jsonSerialize());
    }

}