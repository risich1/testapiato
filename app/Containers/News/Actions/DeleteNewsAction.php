<?php

namespace App\Containers\News\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteNewsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('News@DeleteNewsTask', [$request->id]);
    }
}
