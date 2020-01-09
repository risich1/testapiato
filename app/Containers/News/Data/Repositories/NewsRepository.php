<?php

namespace App\Containers\News\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class NewsRepository
 */
class NewsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
