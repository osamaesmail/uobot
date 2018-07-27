<?php


namespace UO\UOBot\Http;


class Request
{

    public $request; // the incoming request
    private $messaging; // the messaging object in the request


    public function __construct()
    {
        $this->request=json_decode(file_get_contents('php://input'));

        // set messaging to a messaging variable from all request
        if(isset($this->request->entry[0]->messaging[0]))
            $this->messaging=$this->request->entry[0]->messaging[0];
    }


    public static function getSender()
    {

        $request=new Request();

        return isset($request->messaging->sender->id)
            ?$request->messaging->sender->id:'';

    }


    public static function getMessageText()
    {

        $request=new Request();

        return isset($request->messaging->message->text)
            ?$request->messaging->message->text:'';

    }


    public static function getPostbackPayload()
    {

        $request=new Request();

        return isset($request->messaging->postback->payload)
            ?$request->messaging->postback->payload:'';

    }

    public static function getQuickReply()
    {

        $request=new Request();

        return isset($request->messaging->message->quick_reply->payload)
            ?$request->messaging->message->quick_reply->payload:'';

    }


}