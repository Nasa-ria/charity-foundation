<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Services\polymorphicClass;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\EventCollection;

class EventController extends Controller
{

    private polymorphicClass $polymorphicClass ;
 
    public function __construct( polymorphicClass  $polymorphicClass)
    {
        $this->polymorphicClass = $polymorphicClass;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $events = Event::latest()->paginate(10);
        $events = Event::all();
        $events =    new EventCollection($events);
        return $events;

        // return view('dashboard.admin.pages.forms.Cause.cause', compact('causes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.pages.forms.Event.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        try {
            //  dd($request->all());
            $eventData = $request->validated();
            $eventData['event_bullets'] = json_encode($eventData['event_bullets']);
            $event = Event::create($eventData);
            // dd($event);
            $tags = $this->polymorphicClass->handleTags($request);
            return response()->json([
                'data' => $event, $tags
            ]);
            //    return redirect('/cause')->with('success','Post Created Successfully');

        } catch (\Exception $e) {
            // Log and return error response
            Log::error('Form submission failed: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $event = Event::find($id);
        return view('dashboard.admin.pages.forms.Event.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id)
    {
      $event = Event::findOrFail($id);       
      $event->title = $request->input('title');
      $event->description = $request->input('description');
      $event->event_mission = $request->input('event_mission');
      $event->date = $request->input('date');
      $event->status = $request->input('status');
      $event->save();

      $image= $this->polymorphicClass->handleUpdatedImage($request,$id);
    //   return redirect('/form/formlist')->with('success','Post Created Successfully');
      return response()->json([
          'data' => $event ,$image
      ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return back();
    }
}
