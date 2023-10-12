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
            'tags' => 'nullable|array',
            'video_url' => 'nullable|url', 
          
        ]);
        $blog = Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'tags' =>$validated['tags'],
            'status' =>$validated['status'],
        ]);
        if ($request->has('video_url')) {
            $blog->video_url = $validated['video_url'];
        }
    
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos');
            $blog->video_path = $videoPath;
        }
        $blog->save();

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
    public function updateBlog(Request $request, Blog $blog)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'nullable|array',
            'image' => 'required',
            'status' => 'required',
            'video_url' => 'nullable|url', 
            // 'video' => 'nullable|mimes:mp4,avi,mpg|max:10240',
        ]);
            // Find the blog post you want to update
            $id =  $request->input('blog_id');
            Blog::find($id);
            
         if ($request->has('video_url')) {
        $blog->video_url=  $request->input('video_url');

        // Remove any uploaded video file if it exists
        if ($blog->video_path) {
            Storage::delete($blog->video_path);
            $blog->video_path = null;
        }
    }

    if ($request->hasFile('video')) {
        // Delete the old video file if it exists
        if ($blog->video_path) {
            Storage::delete($blog->video_path);
        }

        $videoPath = $request->file('video')->store('videos');
        $blog->video_path = $videoPath;
    }
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
