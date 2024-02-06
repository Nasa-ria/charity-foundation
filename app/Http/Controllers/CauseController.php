<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CauseController extends Controller
{
  
    public function index()
    {
        $publishedCauses = Cause::where('status', 'publish')->get();
         return view('pages.dashboard.cause', ['publish' => $publishedCauses]);
    }
    

            public function draft(){
        $draftCauses = Cause::where('status', 'draft')->get();  
        return view('pages.dashboard.cause', ['draft' => $draftCauses]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view('pages.form.cause');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'title' => 'required|string',
                'details' => 'required',
                'goal' => 'required',
                'rised' => 'required',
                'image' => 'required', 
                'status' => 'required', 
                'tags' => 'required', 
            ]);
            $cause = Cause::create([
                'title' => $validated['title'],
                'details' => $validated['details'],
                'rised' => $validated['rised'],
                'goal' => $validated['goal'],
                'status' =>$validated['status'],
                'tags' => json_encode($validated['tags']),
            ]);

          
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images');// Store the image in the storage/app/images directory
        
                // Create an image record for the blog post
                $image = new Image([
                    'url' => $imagePath, // Assuming 'url' column in the image table stores the image path
                ]);
                // Associate the image with the blog post using polymorphic relationship
                $cause->images()->save($image);
            }
            return response()->json(['message' => 'Form submitted successfully',
            'data' => $cause,$image
                   ]);
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Form submission failed: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'An error occurred while processing the form', $e->getMessage() ], 500);
        }
    }
        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cause = Cause::find($id);

        // Load the view to display the single blog post
        return view('pages.dashboard.singleBlog', ['cause' => $cause]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cause = Cause::find($id);
        return view('pages.form.blog')->with('cause',$cause);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'goal' => 'required',
            'rised' => 'required',
            'image' => 'required',
            'status' => 'required', 
        ]);
            // Find the blog post you want to update
            $cause= Cause::findOrFail($id);
        
            // Update the blog post details
            $cause->title = $request->input('title');
            $cause->details = $request->input('details');
            $cause->rised = $request->input('rised');
            $cause->goal = $request->input('goal');
            $cause->status = $request->input('status');
        
            // Handle image update
            if ($request->hasFile('image')) {
                // Delete the old image if necessary
                if ($cause->images->count() > 0) {
                    $oldImage = $cause->images->first();
                    Storage::delete($oldImage->url);
                    $oldImage->delete();
                }
        
                $imagePath = $request->file('image')->store('images'); // Store the new image in the storage/app/images directory
        
                // Create a new image record for the updated blog post
                $image = new Image([
                    'url' => $imagePath,
                ]);
        
                $cause->images()->save($image);
            }
        
            $cause->save();
        
        
            return response()->json([
                'data' => $cause ,$image
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