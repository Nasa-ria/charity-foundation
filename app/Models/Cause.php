<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cause extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'status',
        'rised',
        'goal',
    ];
    
    protected $casts = [
        'tags' => 'array',
    ];

    public function getTagsAttribute($value)
    {
        return json_decode($value, true);
    }

    // Define accessor for tags field
    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    }


    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
