<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'comment' => 'required',
       
        ]);
        $event = Comment::create([
            'name' => $validated['name'],
            'comment' => $validated['comment'],
          
        ]);
        
           
        return response()->json([
            'data' => $event,
        ]);
    }
}
