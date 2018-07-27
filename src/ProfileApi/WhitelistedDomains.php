<?php

namespace UO\UOBot\ProfileApi;


use UO\UOBot\Api\Api;

class WhitelistedDomains extends Api
{
    protected $whitelisted_domains;

    /**
     * @return mixed
     */
    public function get_whitelisted_domains()
    {
        return $this->whitelisted_domains;
    }

    /**
     * @param mixed $whitelisted_domains
     */
    public function set_whitelisted_domains(array $whitelisted_domains)
    {
        $this->whitelisted_domains = $whitelisted_domains;
        return $this;
    }
}