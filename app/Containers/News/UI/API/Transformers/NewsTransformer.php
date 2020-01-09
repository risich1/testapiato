<?php

namespace App\Containers\News\UI\API\Transformers;

use App\Containers\News\Models\News;
use App\Ship\Parents\Transformers\Transformer;

class NewsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param News $entity
     *
     * @return array
     */
    public function transform(News $entity)
    {
        $response = [
            'object' => 'News',
            'id' => $entity->id,
            'name' => $entity->name,
            'description' => $entity->description,
            'image' => $entity->image,
            'files' => [],
            'tags' => [],
            'rubric' => $entity->rubric_id,
            'isBanComment' => false,
            'hasDatePublish' => true,
            'datePublish' => [],
            'membersBlock' => [],
            'hasAccess' => [],
            'status' => $entity->status,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
