<?php

namespace App\Http\Controllers;

use App\Http\Requests\CauseRequest;
use App\Models\Cause;
use Illuminate\Http\Request;
use App\Services\polymorphicClass;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\CauseCollection;


class CauseController extends Controller
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
           $causes = Cause::latest()->paginate(10);
       $causes =    new CauseCollection($causes);
   
       return view('dashboard.admin.pages.forms.Cause.cause', compact('causes'));
    }

    public function draft(){
        $draftCauses = Cause::where('status', 'draft')->get();  
        return view('pages.dashboard.cause', ['draft' => $draftCauses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.pages.forms.Cause.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CauseRequest $request)
    {
        try{  
          
            $cause = Cause::create($request->validated());
           $image= $this->polymorphicClass->handleUploadedImage($request);
         $tags= $this->polymorphicClass->handleTags($request);
        //  return response()->json([
        //     'data' => $cause ,$image,$tags
        // ]);
           return redirect('/cause')->with('success','Post Created Successfully');
               
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
        $cause = Cause::find($id);
        return view('dashboard.admin.pages.forms.Cause.show', compact('causes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cause = Cause::find($id);
        return view('dashboard.admin.pages.forms.Cause.edit')->with('cause',$cause);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $cause= Cause::findOrFail($id);       
      $cause->title = $request->input('title');
      $cause->details = $request->input('details');
      $cause->rised = $request->input('rised');
      $cause->goal = $request->input('goal');
      $cause->status = $request->input('status');
      $cause->save();

      $image= $this->polymorphicClass->handleUpdatedImage($request,$id);
    //   return redirect('/form/formlist')->with('success','Post Created Successfully');
      return response()->json([
          'data' => $cause ,$image
      ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $cause = Cause::find($id);
     $cause->delete();
     return back();
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
    
        $test = Cause::where('title', 'LIKE', '%' . $search . '%')
                        ->orWhere('status', 'LIKE', '%' . $search . '%')
                        ->get();
    
        if (count($test) > 0) {
            return view('search')->withDetails($test)->withQuery($search);
            // return $test;
        } else {
            return "null";
            return view('search')->withMessage('No Details found. Try to search again!');
        }
    }



}
