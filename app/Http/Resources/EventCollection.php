<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EventCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [ 'data' => EventResource::collection($this->collection)];
    }
}
