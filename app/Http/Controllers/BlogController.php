<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishedBlogs = Blog::where('status', 'publish')->get();
         return view('pages.dashboard.blog', ['blogs' => $publishedBlogs]);
    }
    

    public function draft(){
        $draftblogs = Blog::where('status', 'draft')->get();  
        return view('pages.dashboard.blog', ['draft' => $draftblogs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view('pages.form.blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'image' => 'required', 
            'status' => 'required', 
            'tags' => 'nullable|array'
            
       

        ]);
        $blog = Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'tags' =>$validated['tags'],
            'status' =>$validated['status'],
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Store the image in the storage/app/images directory
    
            // Create an image record for the blog post
            $image = new Image([
                'url' => $imagePath, // Assuming 'url' column in the image table stores the image path
            ]);
    
            // Associate the image with the blog post using polymorphic relationship
            $blog->images()->save($image);
        }
           
        return response()->json([
            'data' => $blog ,$image
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('pages.form.blog')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'nullable|array',
            'image' => 'required',
            'status' => 'required', 
        ]);
            // Find the blog post you want to update
            $blog = Blog::findOrFail($id);
        
            // Update the blog post details
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');
            $blog->tags = $request->input('tags');
            $blog->status = $request->input('status');
        
            // Handle image update
            if ($request->hasFile('image')) {
                // Delete the old image if necessary
                if ($blog->images->count() > 0) {
                    $oldImage = $blog->images->first();
                    Storage::delete($oldImage->url);
                    $oldImage->delete();
                }
        
                $imagePath = $request->file('image')->store('images'); // Store the new image in the storage/app/images directory
        
                // Create a new image record for the updated blog post
                $image = new Image([
                    'url' => $imagePath,
                ]);
        
                $blog->images()->save($image);
            }
        
            $blog->save();
        
        
            return response()->json([
                'data' => $blog ,$image
            ]);
        
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
