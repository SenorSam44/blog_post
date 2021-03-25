<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'data'=>$this->collection->transform(function ($post) {
                return [
                    'id'=> $post->id,
                    'user_id'=> $post->user_id,
                    'post_title' => $post->post_title,
                    'post_body' => $post->post_body,
                    'created_at' => $post->created_at,
                    'updated_at' => $post->updated_at
                    ];
            })
        ];

//        return $this->collection;
    }
}
