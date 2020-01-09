<?php

namespace App\Containers\News\Tasks;

use App\Containers\News\Data\Repositories\NewsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateNewsTask extends Task
{

    protected $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
