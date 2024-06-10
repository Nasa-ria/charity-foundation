<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

use App\Services\polymorphicClass;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\ImageCollection;

class GalleryController extends Controller
{
    private polymorphicClass $polymorphicClass ;

    public function __construct( polymorphicClass  $polymorphicClass)
    {
        $this->polymorphicClass = $polymorphicClass;
    }

    public function index()
    {
        // $events = Event::latest()->paginate(10);
        $images = Image::all();
        $images =    new ImageCollection($images);
        // return $images;

        return view('dashboard.admin.pages.forms.Image.index', compact('images'));
    }

    public function create(){
        return view('dashboard.admin.pages.forms.Image.create');
    }

    public function store(Request $request)
    {
        try{  
           $image= $this->polymorphicClass ->handleUploadedImage($request);
     
         return response()->json([
            'data' => $image,
        ]);
          
               
        } catch (\Exception $e) {
            // Log and return error response
            Log::error('Form submission failed: ' . $e->getMessage());
        }
    }

}
