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

$app->get("/", function (Application $app) {

    $pdo = new PDO('mysql:host=localhost;dbname=CIBlog', 'user', 'password');
    $pr    = new PostRepository($pdo);
    $post  = $pr->findLastPost();

    return $app['twig']->render('index.html.twig', array(
        'post' => $post,
    ));
});

return $app;