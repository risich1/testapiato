<?php

namespace App\Containers\News\UI\API\Tests\Functional;

use App\Containers\News\Tests\ApiTestCase;

/**
 * Class NewsFuncTest.
 *
 * @group news
 * @group api
 */
class NewsCreateTest extends ApiTestCase
{

    // the endpoint to be called within this test (e.g., get@v1/users)
    protected $endpoint = 'post@v1/news';

    // fake some access rights
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * @test
     */
    public function test_()
    {
        $data = [
          'name' => "Новость с картинкой",
          "description" => "Это какое-то там содержание новости и бла блабла",
          "hasDatePublish" => 0,
          "isBanComment" => 0,
          "rubric_id" => 1,
          "status" => 1
        ];


        $response = $this->makeCall($data);


        $response->assertStatus(201);

        $response->assertJson([
          'data' => [
            'object' => 'News'
          ]
        ]);
    }

}
