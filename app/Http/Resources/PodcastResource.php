<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class PodcastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'cover'=>$this->cover,
            'audio'=>$this->audio,
            'created_at'=>$this->created_at,
            'part'=>$this->part,
            // 'user' => $this->user->only('name','avatar'),

    ];
  
    }
}
