<?php

/**
 * @apiGroup           News
 * @apiName            updateNews
 *
 * @api                {PATCH} /v1/news/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('news/{id}', [
    'as' => 'api_news_update_news',
    'uses'  => 'Controller@updateNews',
//    'middleware' => [
//      'auth:api',
//    ],
]);
