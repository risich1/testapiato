<?php

namespace App\Containers\News\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindNewsByIdAction extends Action
{
    public function run(Request $request)
    {
        $news = Apiato::call('News@FindNewsByIdTask', [$request->id]);

        return $news;
    }
}
