<?php

require_once __DIR__ . '/src/Helper/GreetingHelper.php';

use Helper\GreetingHelper as MyHelper;

$formalHelper = new MyHelper('Hello');
//var_dump($formalHelper);
print $formalHelper->sayHello('Sergey');

$friendlyHelper = new MyHelper('Hi');
print $friendlyHelper->sayHello('Victor');
