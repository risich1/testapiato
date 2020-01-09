<?php

/** @var Route $router */
$router->delete('news/{id}', [
    'as' => 'web_news_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
