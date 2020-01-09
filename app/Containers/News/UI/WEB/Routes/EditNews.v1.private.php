<?php

/** @var Route $router */
$router->get('news/{id}/edit', [
    'as' => 'web_news_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
