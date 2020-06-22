<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /* return parent::toArray($request); */
        return [
            'title'         => $this->title,
            'path'          => $this->path,
            'body'          => $this->body,
            'user'          => $this->user->name,
            'size'          => $this->size,
            'photo'         => $this->photo,
            'status'        => $this->status,
            'created_at'    => $this->created_at->diffForHumans(),
        ];
    }
}
