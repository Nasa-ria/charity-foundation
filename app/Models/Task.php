<?php

namespace App\Models;

use App\Models\Assignee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'completed', // Add 'completed' here
    ];

    public function assignees()
{
    return $this->belongsToMany(Assignee::class);
}
}
