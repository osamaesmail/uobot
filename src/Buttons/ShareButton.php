<?php


namespace UO\UOBot\Buttons;


class ShareButton extends Button
{
    protected $type='element_share';
    protected $share_contents;

    /**
     * @return mixed
     */
    public function get_share_contents()
    {
        return $this->share_contents;
    }

    /**
     * @param mixed $share_contents
     */
    public function set_share_contents($share_contents)
    {
        $this->share_contents = $share_contents;

        return $this;
    }

}