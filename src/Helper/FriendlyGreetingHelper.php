<?php
/**
 * Created by PhpStorm.
 * User: Intellekt
 * Date: 26.04.2017
 * Time: 16:30
 */

namespace Helper;

class FriendlyGreetingHelper extends AbstractGreetingHelper
{
    public function __construct($message = 'Hi')
    {
        $this->message = $message;
    }
}
