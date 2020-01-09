<?php

namespace App\Containers\News\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class RubricRepository
 */
class RubricRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
