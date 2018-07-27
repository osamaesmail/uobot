<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 18/07/2018
 * Time: 05:06 م
 */

namespace UO\UOBot\URLAttachment;


use UO\UOBot\Attachments\URLAttachment;

class VideoAttachment extends URLPayload
{
    protected function getParentType()
    {
        return 'video';
    }
}