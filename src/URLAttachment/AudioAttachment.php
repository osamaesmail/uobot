<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 18/07/2018
 * Time: 05:06 م
 */

namespace UO\UOBot\URLAttachment;



class AudioAttachment extends URLPayload
{
    protected function getParentType()
    {
        return 'audio';
    }
}