<?php

require_once __DIR__.'/src/GreetingHelper.php';

$formalHelper = new GreetingHelper('Hello');
//var_dump($formalHelper);
print $formalHelper->sayHello('Sergey');

$friendlyHelper = new GreetingHelper('Hi');
print $friendlyHelper->sayHello('Victor');
