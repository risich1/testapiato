<?php

namespace App\Containers\News\UI\WEB\Controllers;

use App\Containers\News\UI\WEB\Requests\CreateNewsRequest;
use App\Containers\News\UI\WEB\Requests\DeleteNewsRequest;
use App\Containers\News\UI\WEB\Requests\GetAllNewsRequest;
use App\Containers\News\UI\WEB\Requests\FindNewsByIdRequest;
use App\Containers\News\UI\WEB\Requests\UpdateNewsRequest;
use App\Containers\News\UI\WEB\Requests\StoreNewsRequest;
use App\Containers\News\UI\WEB\Requests\EditNewsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\News\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllNewsRequest $request
     */
    public function index(GetAllNewsRequest $request)
    {
        $news = Apiato::call('News@GetAllNewsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindNewsByIdRequest $request
     */
    public function show(FindNewsByIdRequest $request)
    {
        $news = Apiato::call('News@FindNewsByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateNewsRequest $request
     */
    public function create(CreateNewsRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreNewsRequest $request
     */
    public function store(StoreNewsRequest $request)
    {
        $news = Apiato::call('News@CreateNewsAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditNewsRequest $request
     */
    public function edit(EditNewsRequest $request)
    {
        $news = Apiato::call('News@GetNewsByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateNewsRequest $request
     */
    public function update(UpdateNewsRequest $request)
    {
        $news = Apiato::call('News@UpdateNewsAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteNewsRequest $request
     */
    public function delete(DeleteNewsRequest $request)
    {
         $result = Apiato::call('News@DeleteNewsAction', [$request]);

         // ..
    }
}
