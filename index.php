<?php

// var_dump($a);
// die('1');

// $a = '5';
// $a = (float)$a;
// print_r($a);
// print "Helloooo<br>\nWorld!{$a}";

//define('PI', 3.14);
//print PI;

function hello($name = 'Guest')
{
    $message = "Hello ".$name."!<br>";

    if ($name === 'Guest') {
        //$message = $message.'<a href="">Login</a>';
        $message .= '<a href="">Login</a>';
    } elseif ($name === 'Victor') {
        $message = 'Yo man!';
    } else {
        $message .= '<a href="">Logout</a>';
    }

    return $message;
}

//$message = hello('Victor');
//print $message;

//$message = hello();
//print $message;

// indexed array
//$arr = array();
$arr = [1 => 1, 2, 3];
$arr[] = 5;
$arr[10] = 55;
$arr[2] = 22;
$arr[99] = [3, 33, 333];
unset($arr[3]);

//var_dump($arr);

//if (isset($arr[10])) {
//    print $arr[10];
//}
//print $arr[99][1];


// assoc array
$langs = [
    'backend' => [
        'PHP',
        'Python',
    ],
    'frontend' => ['JavaScript'],
];
print_r($langs);

print $langs['frontend'][0];
