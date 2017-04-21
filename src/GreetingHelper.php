<?php

/**
 * Created by PhpStorm.
 * User: Intellekt
 * Date: 21.04.2017
 * Time: 17:26
 */
class GreetingHelper
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

//    public function getMessage()
//    {
//        return $this->message;
//    }

    public function sayHello($name = 'Guest')
    {
        $finalMessage = $this->message.' '.$name;

        return $finalMessage;
    }
}
