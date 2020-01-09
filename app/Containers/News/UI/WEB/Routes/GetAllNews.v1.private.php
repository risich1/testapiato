<?php

/** @var Route $router */
$router->get('news', [
    'as' => 'web_news_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
