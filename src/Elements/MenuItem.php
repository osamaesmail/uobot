<?php
/**
 * Created by PhpStorm.
 * User: a-designs
 * Date: 15/07/2018
 * Time: 11:53 ص
 */

namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class NestedMenu extends Api
{
    protected $type='nested';
    protected $title;
    protected $call_to_actions;

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
    public function get_call_to_actions()
    {
        return $this->call_to_actions;
    }

    /**
     * @param mixed $call_to_actions
     */
    public function set_call_to_actions(array $call_to_actions)
    {
        $this->call_to_actions = $call_to_actions;
        return $this;
    }

}