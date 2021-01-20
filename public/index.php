<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');

$router->run();
?>

<H1>Hello</H1>

<!-- https://www.youtube.com/watch?v=hLIP2EwnQ48
 -->