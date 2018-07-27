<?php

namespace UO\UOBot\URLAttachment;


class ImageAttachment extends URLPayload
{
    protected function getParentType()
    {
        return 'image';
    }
}