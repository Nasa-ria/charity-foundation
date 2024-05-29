<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $publishedEvent = Event::where('status', 'publish')->get();
         return view('pages.dashboard.event', ['publish' => $publishedEvent]);
    }
    

            public function draft(){
        $draftEvent = Event::where('status', 'draft')->get();  
        return view('pages.dashboard.event', ['draft' => $draftEvent]);
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
        $validated = $request->validate([
            'title' => 'required|string',
            'loaction' => 'required',
            'image' => 'required', 
            'date' => 'required', 
            'event_details' => 'event_details', 
            'event_mission'=>'event_mission',  
            'status' => 'required', 
        ]);
        $event = Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'date' => Carbon::now()->format('Y-m-d H:i:s'),  
            'location' => $validated['location'],
            'status' =>$validated['status'],
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Store the image in the storage/app/images directory
    
            // Create an image record for the blog post
            $image = new Image([
                'url' => $imagePath, // Assuming 'url' column in the image table stores the image path
            ]);
    
            // Associate the image with the blog post using polymorphic relationship
            $event->images()->save($image);
        }
           
        return response()->json([
            'data' => $event,$image
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);

        // Load the view to display the single blog post
        return view('pages.dashboard.singleBlog', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id);
        return view('pages.form.blog')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'loaction' => 'required',
            'image' => 'required', 
            'date' => 'required', 
            'event_details' => 'event_details', 
            'event_mission'=>'event_mission',
            'status' => 'required', 
        ]);
            // Find the blog post you want to update
            $event= Event::findOrFail($id);
        
            // Update the blog post details
            $event->title = $request->input('title');
            $event->description = $request->input('description');
            $event->location = $request->input('location');
            $event->date = $request->input('date');
            $event->status = $request->input('status');
        
            // Handle image update
            if ($request->hasFile('image')) {
                // Delete the old image if necessary
                if ($event->images->count() > 0) {
                    $oldImage = $event->images->first();
                    Storage::delete($oldImage->url);
                    $oldImage->delete();
                }
        
                $imagePath = $request->file('image')->store('images'); // Store the new image in the storage/app/images directory
        
                // Create a new image record for the updated blog post
                $image = new Image([
                    'url' => $imagePath,
                ]);
        
                $event->images()->save($image);
            }
        
            $event->save();
        
        
            return response()->json([
                'data' => $event ,$image
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
