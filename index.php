<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

// Register service providers
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'dbname' => 'silex_blog',
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'usbw',
        'port' => 3307,
    ),
));

// Register routes
$app->get('/', '\\Controller\\BlogController::indexAction');
$app->get('/blog/{id}', '\\Controller\\BlogController::showPostAction');

$app->run();
