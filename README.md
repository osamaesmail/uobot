# uobot

uobot is a library for php to develop messenger chatbot using oop, and send all types of templates, attachments and quickreplies, and setup page profile (greeting text, getstarted button, persistent menu), and listen to many types of messages.



![UOBot Image 1](https://messenger.fb.com/wp-content/uploads/2018/02/gieofglobe_tableau.png?w=516&h=474,%20https://messenger.fb.com/wp-content/uploads/2018/02/gieofglobe_tableau.png?w=1032&h=948%202x)


![UOBot Image 1](https://messenger.fb.com/wp-content/uploads/2018/01/3_enabletransactions11.png?w=510&h=662,%20https://messenger.fb.com/wp-content/uploads/2018/01/3_enabletransactions11.png?w=1020&h=1324%202x)



## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development.

## [Our demo](http://m.me/uobot123) 

You can test our [demo](http://m.me/uobot123) at facebook to see the types of messeges and how it will be like.

## Installing

* Require the plugin using composer

```console
composer require uo/uobot:dev-master
```

## Get Started

* Setup and verify webhook

```php
Webhook::verify('VERIFY_TOKEN');
```

* Set your facebook page token

```php
Config::setToken('YOUR_PAGE_TOKEN');
```

* Send your first message

this code listen to message hi and send reply hello.

```php
UOBot::onMessage('hi',function ($uoBot){
    $uoBot->send('hello');
});
```

## Table of Contents
* [Get Started](Home)
* [UOBot functions](UOBot-Functions)
* [Send Quick Replies](Send-Quick-Replies)
* [Send Generic Template](Send-generic-template)
* [Send List Template](Send-List-template)
* [Send Button Template](Send-Button-template)
* [Send OpenGraph Template](Send-OpenGraph-template)
* [Send Receipt Template](Send-Receipt-template)
* [Send Attachments](Send-Attcahments-template)
* [Button Types](Button-Types)
* [Set Get Started Button](Set-Get-Started-Button)
* [Set Get Greeting Text](Set-Greeting-Text)
* [Set Get Persistent Menu](Set-Persistent-Menu)



## Authors

* **Osama Esmail** - *Initial work* - [osamaesmail](https://github.com/osamaesmail)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details
