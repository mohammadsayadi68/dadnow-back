<?php

namespace App\Http\Resources;
use App\Http\Resources\PodcastResource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PodcastCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'data' => $this->collection,
         
    ];
    }
}
