<?php

namespace App\Containers\News\Tasks;

use App\Containers\News\Data\Repositories\NewsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindNewsByIdTask extends Task
{

    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
