<?php

use CIBlog\PostRepository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app['db'] = $app->share(function($app) {
    return new PDO(
        'mysql:host=localhost;dbname=CIBlog',
        'user',
        'password'
    );
});


$app->get("/", function (Application $app) {

    $pr    = new PostRepository($app['db']);
    $posts  = $pr->findAll();

    return $app['twig']->render('index.html.twig', array(
        'posts' => $posts,
    ));
});

return $app;