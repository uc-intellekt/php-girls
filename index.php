<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function () {
    return 'Blog';
});
$app->get('/blog/{id}', function ($id) use ($app) {
    return 'Post '.$app->escape($id);
});

$app->run();
