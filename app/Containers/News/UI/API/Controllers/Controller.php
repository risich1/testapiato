<?php

namespace App\Containers\News\UI\API\Controllers;

use App\Containers\News\UI\API\Requests\CreateNewsRequest;
use App\Containers\News\UI\API\Requests\DeleteNewsRequest;
use App\Containers\News\UI\API\Requests\GetAllNewsRequest;
use App\Containers\News\UI\API\Requests\FindNewsByIdRequest;
use App\Containers\News\UI\API\Requests\UpdateNewsRequest;
use App\Containers\News\UI\API\Transformers\NewsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\News\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateNewsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createNews(CreateNewsRequest $request)
    {
        $news = Apiato::call('News@CreateNewsAction', [$request]);

        return $this->created($this->transform($news, NewsTransformer::class));
    }

    /**
     * @param FindNewsByIdRequest $request
     * @return array
     */
    public function findNewsById(FindNewsByIdRequest $request)
    {
        $news = Apiato::call('News@FindNewsByIdAction', [$request]);

        return $this->transform($news, NewsTransformer::class);
    }

    /**
     * @param GetAllNewsRequest $request
     * @return array
     */
    public function getAllNews(GetAllNewsRequest $request)
    {
        $news = Apiato::call('News@GetAllNewsAction', [$request]);

        return $this->transform($news, NewsTransformer::class);
    }

    /**
     * @param UpdateNewsRequest $request
     * @return array
     */
    public function updateNews(UpdateNewsRequest $request)
    {
        $news = Apiato::call('News@UpdateNewsAction', [$request]);

        return $this->transform($news, NewsTransformer::class);
    }

    /**
     * @param DeleteNewsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteNews(DeleteNewsRequest $request)
    {
        Apiato::call('News@DeleteNewsAction', [$request]);

        return $this->noContent();
    }
}
