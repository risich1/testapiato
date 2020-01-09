<?php

$router->post('tags', [
  'as' => 'api_news_create_tag',
  'uses'  => 'TagController@create',
//  'middleware' => [
//    'auth:api',
//  ]
]);
