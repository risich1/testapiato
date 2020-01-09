<?php

/** @var Route $router */
$router->get('news/create', [
    'as' => 'web_news_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
