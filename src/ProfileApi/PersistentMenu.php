<?php

namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class PersistentMenu extends Api
{
    protected $locale='default';
    protected $composer_input_disabled;
    protected $disabled_surfaces;
    protected $call_to_actions;

    /**
     * @return mixed
     */
    public function get_locale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     */
    public function set_locale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_composer_input_disabled()
    {
        return $this->composer_input_disabled;
    }

    /**
     * @param mixed $composer_input_disabled
     */
    public function set_composer_input_disabled($composer_input_disabled)
    {
        $this->composer_input_disabled = $composer_input_disabled;
        return $this;
    }

    /**
     * @return mixed
     */
    public function get_disabled_surfaces()
    {
        return $this->disabled_surfaces;
    }

    /**
     * @param mixed $disabled_surfaces
     */
    public function set_disabled_surfaces(array $disabled_surfaces)
    {
        $this->disabled_surfaces = $disabled_surfaces;
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