<?php
$router->get('/qwe', [
  'as'   => 'v1_api_my_route',
  'uses' => function() { echo 'Hey!! This is my route!!!!'; }
]);
