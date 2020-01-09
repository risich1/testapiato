<?php

namespace App\Containers\News\Tasks\Tag;

use App\Containers\News\Data\Repositories\TagRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateTagTask extends Task
{

    protected $repository;

    public function __construct(TagRepository $repository)
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
