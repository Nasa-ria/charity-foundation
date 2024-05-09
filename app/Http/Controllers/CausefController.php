<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Services\polymorphicClass;
use App\Http\Requests\CauseRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CauseController extends Controller
{
  
    private polymorphicClass $polymorphicClass ;
 
    public function __construct( polymorphicClass  $polymorphicClass)
    {
        $this->polymorphicClass = $polymorphicClass;
    }



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
    public function store(CauseRequest $request)
    {
        try{
          
            $cause = Cause::create($request->validated());
            $this->polymorphicClass->handleUploadedImage($request);
          $this->polymorphicClass->handleTags($request);
           return redirect('/form/formlist')->with('success','Post Created Successfully');
               
        } catch (\Exception $e) {
            // Log and return error response
            Log::error('Form submission failed: ' . $e->getMessage());
            // return response()->json([
            //     'error' => 'An error occurred while processing the form',
            //     'message' => $e->getMessage()
            // ], 500);
        }
    }
    
        
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $cause = Cause::find($id);
        return view('dashboard.admin.pages.forms.edit-cause');
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
    public function update(CauseRequest $request, string $id)
    {
      
            // Find the blog post you want to update
            $cause= Cause::findOrFail($id);
        
            // Update the blog post details
            $cause->title = $request->input('title');
            $cause->details = $request->input('details');
            $cause->rised = $request->input('rised');
            $cause->goal = $request->input('goal');
            $cause->status = $request->input('status');
            $cause->save();

            $image= $this->polymorphicClass->handleUpdatedImage($request,$id);
        
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