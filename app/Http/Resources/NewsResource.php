<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class NewsResource extends JsonResource
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
            'created_at'=>$this->created_at,
            // 'user' => UserResource::resource($this->user),
            'user' => $this->user->only('name','avatar'),

    ];
  
    }
}
