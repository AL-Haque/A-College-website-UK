<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

function images($newFloder,$setImage,$getImage){

    $path = public_path().'images/'.$newFloder;
        if (! File::exists($path)) {
            File::mkdir($path);
        }
    $destination = 'images/'.$newFloder .'/' . $setImage;
              if (File::exists($destination)) {
                  File::delete($destination);
              }
              $file = $getImage;
              $extension = $file->getClientOriginalExtension();
              $filename = time() . '.' . $extension;
              $file->move('images/', $filename);
              $setImage = $filename;
}
function storeimages($newFloder,$setImage){

    $path =  public_path('images/'.$newFloder);
        if (! File::exists($path)) {
            File::makeDirectory($path);
        }

        $newsExtension = $setImage->extension();
        $newsImage = 'images/'.$newFloder.'/'. uniqid() . "_" . time() . '.' .$newsExtension;

        $setImage->move($path,$newsImage);

        return $newsImage;
}


?>
