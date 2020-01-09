<?php

namespace App\Containers\News\Tasks;

use App\Containers\News\Data\Repositories\NewsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllNewsTask extends Task
{

    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
