<?php


namespace UO\UOBot\Buttons;


use UO\UOBot\Elements\GameMetadata;

class GamePlayButton
{
    protected $type='game_play';
    protected $title;
    protected $payload;
    protected $game_metadata;

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
    public function get_game_metadata()
    {
        return $this->game_metadata;
    }

    /**
     * @param mixed $game_metadata
     */
    public function set_game_metadata(GameMetadata $game_metadata)
    {
        $this->game_metadata = $game_metadata;
        return $this;
    }

}