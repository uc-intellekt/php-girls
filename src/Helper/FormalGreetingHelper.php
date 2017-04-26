<?php
/**
 * Created by PhpStorm.
 * User: Intellekt
 * Date: 26.04.2017
 * Time: 16:29
 */

namespace Helper;

class FormalGreetingHelper extends AbstractGreetingHelper
{
    public function __construct($message = 'Hello')
    {
        $this->message = $message;
    }
}
