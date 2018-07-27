<?php


namespace UO\UOBot\Templates;




use UO\UOBot\Api\SendApi;
use UO\UOBot\Attachments\TemplateAttachment;
use UO\UOBot\SendApi\Message;
use UO\UOBot\SendApi\Payload;
use UO\UOBot\SendApi\Recipient;

class Template extends Payload
{
    protected $template_type;

    public function jsonSerialize()
    {
        return TemplateAttachment::create()->set_payload(parent::jsonSerialize());
    }

    public function getSendApiType()
    {
        return Template::class;
    }

    public function toSendApi(SendApi $sendApi)
    {
        return $sendApi
            ->set_message(
                Message::create()
                    ->set_attachment($this)
            );
    }

}