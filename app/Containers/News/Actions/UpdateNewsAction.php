<?php

namespace App\Containers\News\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateNewsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
          'name',
          'description',
          'image',
          'files',
          'tags',
          'rubric_id',
          'isBanComment',
          'hasDatePublish',
          'datePublish',
          'membersBlock',
          'hasAccess',
          'status'
        ]);

        $news = Apiato::call('News@UpdateNewsTask', [$request->id, $data]);

        return $news;
    }
}
