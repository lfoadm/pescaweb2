<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id'      => $this->user->id,
            'comment'   => $this->body,
            'user'      => $this->user->name,
            'created_at'=> $this->created_at->diffForHumans(),
        ];
    }
}
