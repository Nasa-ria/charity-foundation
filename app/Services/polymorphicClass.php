<?php
namespace App\Services;

use App\Models\Tag;
use App\Models\Cause;
use App\Models\Image;
use App\Http\Requests\CauseRequest;
use Illuminate\Support\Facades\Storage;

class polymorphicClass{

public function handleUploadedImage($request){ 
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images');
        // Create Image model and associate it with the cause
        $image = new Image(['url' => $imagePath]);
        // return $image;
;   // ['price' => 99, 'discounted' => 1]
    

}

}
public function handleUpdatedImage($request ,$id){
    $cause= Cause::findOrFail($id);
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
        // $image = Image::updateOrCreate(  
        //     ['image' => $image]
        // );   
        

       
    }
    





public function handleTags($request){
    $tags = $request->input('tags');
    $tagsJson = json_encode($tags);
    $tags = new Tag([
        'tags' => $tagsJson ,
    ]);
// return $tags;

}






}

