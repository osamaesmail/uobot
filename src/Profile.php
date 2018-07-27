<?php


namespace UO\UOBot;


use UO\UOBot\Api\ProfileApi;
use UO\UOBot\ProfileApi\GetStarted;
use UO\UOBot\ProfileApi\Greeting;
use UO\UOBot\ProfileApi\HomeUrl;
use UO\UOBot\ProfileApi\PersistentMenu;

class Profile
{
    public static function getStarted($payload){

        ProfileApi::create()
            ->set_get_started(
            GetStarted::create()->set_payload($payload)
            )->send();
    }

    public static function greeting(array $greeting)
    {
       ProfileApi::create()
            ->set_greeting($greeting)
            ->send();
    }

    public static function homeURL(HomeUrl $homeUrl)
    {
        ProfileApi::create()
            ->set_home_url($homeUrl)
            ->send();
    }

    public static function whiteListDomains(array $whiteListDomains)
    {
        ProfileApi::create()
            ->set_whitelisted_domains($whiteListDomains)
            ->send();
    }

    public static function persistentMenu(array $persistentMenu)
    {
        ProfileApi::create()
            ->set_persistent_menu($persistentMenu)
            ->send();
    }

    public static function accountLinkingURL($url)
    {
        ProfileApi::create()
            ->set_account_linking_url($url)
            ->send();
    }

}