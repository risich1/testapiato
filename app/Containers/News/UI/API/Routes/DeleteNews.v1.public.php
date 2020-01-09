<?php

/**
 * @apiGroup           News
 * @apiName            deleteNews
 *
 * @api                {DELETE} /v1/news/:id Endpoint title here..
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
$router->delete('news/{id}', [
    'as' => 'api_news_delete_news',
    'uses'  => 'Controller@deleteNews',
    'middleware' => [
      'auth:api',
    ],
]);
