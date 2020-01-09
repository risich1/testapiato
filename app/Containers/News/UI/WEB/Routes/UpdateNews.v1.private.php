<?php

/** @var Route $router */
$router->patch('news/{id}', [
    'as' => 'web_news_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
