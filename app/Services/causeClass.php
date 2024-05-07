<?php
namespace App\Services;

use App\Models\Cause;
use App\Models\Image;
use App\Http\Requests\CauseRequest;

class causeClass{

public function handleUploadedImage($request){
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images');
        // Create Image model and associate it with the cause
        $image = new Image(['url' => $imagePath]);
    }
    $image = Image::updateOrCreate(  
        ['image' => $image]
    );    // ['price' => 99, 'discounted' => 1]
    

}

public function handleTags($request){
    $tags = $request->input('tags');
    $tagsJson = json_encode($tags);
    $image = Cause::updateOrCreate(  
        ['tags' => $tagsJson]
    );


}






}

