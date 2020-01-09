<?php

/** @var Route $router */
$router->post('news/store', [
    'as' => 'web_news_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
