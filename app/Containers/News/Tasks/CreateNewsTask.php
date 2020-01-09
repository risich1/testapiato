<?php

namespace App\Containers\News\Tasks;

use App\Containers\News\Data\Repositories\NewsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateNewsTask extends Task
{

    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
