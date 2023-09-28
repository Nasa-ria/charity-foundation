<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'likes',
        'tages',
        'draft'
    ];


    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
