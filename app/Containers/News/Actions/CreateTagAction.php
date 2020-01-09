<?php

namespace App\Containers\News\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateTagAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
          'name'
        ]);

        $tag = Apiato::call('News@CreateTagTask', [$data]);

        return $tag;
    }
}
