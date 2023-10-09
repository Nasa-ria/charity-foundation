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
        'status'
    ];
    
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
