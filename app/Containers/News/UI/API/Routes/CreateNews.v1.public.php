<?php

/**
 * @apiGroup           News
 * @apiName            createNews
 *
 * @api                {POST} /v1/news Endpoint title here..
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
$router->post('news', [
    'as' => 'api_news_create_news',
    'uses'  => 'Controller@createNews',
      'middleware' => [
      'auth:api',
    ]
]);
