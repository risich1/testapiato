<?php

/**
 * @apiGroup           News
 * @apiName            findNewsById
 *
 * @api                {GET} /v1/news/:id Endpoint title here..
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
$router->get('news/{id}', [
    'as' => 'api_news_find_news_by_id',
    'uses'  => 'Controller@findNewsById',
//    'middleware' => [
//      'auth:api',
//    ],
]);
