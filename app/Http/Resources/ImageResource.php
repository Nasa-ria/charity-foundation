<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ImageResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);'url',
      
        return[
            'url' =>$this->url,
            'imageable_id'=>$this->imageable_id,
            'imageable_type'=>$this->imageable_type,
           
            ];
    }
}
