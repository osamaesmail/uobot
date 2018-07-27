<?php


namespace UO\UOBot\Elements;


use UO\UOBot\Api\Api;

class GameMetadata extends Api
{
    protected $player_id;
    protected $context_id;

    /**
     * @return mixed
     */
    public function get_player_id()
    {
        return $this->player_id;
    }

    /**
     * @param mixed $player_id
     */
    public function set_player_id($player_id)
    {
        $this->player_id = $player_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_context_id()
    {
        return $this->context_id;
    }

    /**
     * @param mixed $context_id
     */
    public function set_context_id($context_id)
    {
        $this->context_id = $context_id;
        return $this;
    }
}