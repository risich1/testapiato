<?php

namespace App\Containers\News\Tasks\Tag;

use App\Containers\News\Data\Repositories\TagRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllTagsTask extends Task
{

    protected $repository;

    public function __construct(TagRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
