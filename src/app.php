<?php

use CIBlog\PostRepository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;
$app['env'] = getenv('APPENV') ?: 'development';

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/' . $app['env'] . '.log',
));

$app['db'] = $app->share(function($app) {

    return new PDO('mysql:host=localhost;dbname=ci', 'summer', 'camp');
});

$app->get("/", function (Application $app) {

    $pr    = new PostRepository($app['db']);
    $posts  = $pr->findAll();

    return $app['twig']->render('index.html.twig', array(
        'posts' => $posts,
    ));
});

return $app;