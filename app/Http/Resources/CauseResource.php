<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CauseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
            'title'=>$this->title,
            'details'=>$this->details,
            'status'=>$this->status,
            'rised'=>$this->rised,
            'goal'=>$this->goal,
            'created_at'=>$this->created_at,

        ];
    }
}
