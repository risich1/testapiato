<?php

namespace App\Containers\News\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllNewsAction extends Action
{
    public function run(Request $request)
    {
        $news = Apiato::call('News@GetAllNewsTask', [], ['addRequestCriteria']);

        return $news;
    }
}
