<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
        'title'=>$this->title,
        'event_details'=>$this->event_details,
        'event_bullets'=>$this->event_bullets,
        'event_mission'=>$this->event_mission,
        'status'=>$this->status,
        'date'=>$this->date,
        'location'=>$this->location,
        'created_at'=>$this->created_at
        ];
        // return parent::toArray($request);
    }
}
