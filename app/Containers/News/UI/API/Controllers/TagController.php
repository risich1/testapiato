<?php

namespace App\Containers\News\UI\API\Controllers;

use App\Containers\News\Actions\CreateTagAction;
use App\Ship\Parents\Controllers\ApiController;
use App\Containers\News\Data\Repositories\TagRepository;
use Apiato\Core\Foundation\Facades\Apiato;

class TagController extends ApiController
{
    public function create(TagRepository $request)
    {
      $tag = Apiato::call('News@CreateTagAction', [$request]);

      return $this->json($tag);
    }
}
