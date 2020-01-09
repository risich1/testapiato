<?php

/** @var Route $router */
$router->get('news/{id}', [
    'as' => 'web_news_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
