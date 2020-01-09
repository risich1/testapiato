<?php

namespace App\Containers\News\Tasks;

use App\Containers\News\Data\Repositories\NewsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteNewsTask extends Task
{

    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
