<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blogs = Blog::all();
        $blogs = Blog::where('status', '=', 'publish')->get();  
        return view('pages.dashboard/blog') ;
    }
    

    public function draft(){
        $blogs = Blog::where('status', '=', 'draft')->get();  
        return view('pages.dashboard/blog') ;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view('pages.form/blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'required', 
       

        ]);
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/images', $image);
      
    

        $blog = Blog::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'tags' =>$validated['tags'],
            'status' =>$validated['status'],
            'image'=> $image
        ]);
           
        return response()->json([
            'data' => $blog
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
            'description' => 'required',
            'tags' => 'required',
            'image' => 'required',
        ]);
          $blog= Blog::find($id);
        if($request->hasFile('image')){
            
            if (File::exists('storage/images/agents/profile/'.$blog->image)){
                File::delete('storage/images/agents/profile/'.$blog->image);
                
                
            }
            $blog_image = $request->file('profile')->getClientOriginalName();
             $image= $request->file('profile')->storeAs('public/images/agents/profile',$blog_image);
             $data['profile'] =$blog_image;
        }   
        $blog= Blog::find($id);
                $blog->$request->get('title');
                $blog ->$request->get('description');
                $blog->$request->get('tags');
                $blog->$request->get('status');
                $blog->$image = $image;
                
                $blog->save();
                return response()->json(['message' => 'user updated successfully', 'data' => $blog]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
