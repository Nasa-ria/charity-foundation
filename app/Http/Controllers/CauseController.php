<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Causes = Cause::all();
        return view("pages.dashboard/cause") ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form/cause');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'title' => 'required|string',
            'details' => 'required',
            'image' => 'required', 
         

        ]);
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/images', $image);
      
    

        $cause = Cause::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' =>$validated['status'],
            'image'=> $image
        ]);
      
        return response()->json([
            'data' => $cause
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
