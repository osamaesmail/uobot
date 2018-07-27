<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 18/07/2018
 * Time: 05:06 م
 */

namespace UO\UOBOT\URLAttachment;


class FileAttachment extends URLPayload
{
    protected function getParentType()
    {
        return 'file';
    }
}