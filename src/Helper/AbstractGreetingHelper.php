<?php
/**
 * Created by PhpStorm.
 * User: Intellekt
 * Date: 26.04.2017
 * Time: 16:58
 */

namespace Helper;

abstract class AbstractGreetingHelper implements GreetingHelperInterface
{
    protected $message;

    public function sayHello($name = 'Guest')
    {
        $finalMessage = $this->message.' '.$name;

        return $finalMessage;
    }
}
