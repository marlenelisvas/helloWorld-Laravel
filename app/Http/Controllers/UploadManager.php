<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadManager extends Controller
{
    //
   public function upload(){
        return view('files.upload');
    }
    public function  uploadPost(Request $request){
        $file = $request->file("file");
        echo 'File name: '. $file->getClientOriginalName();
        echo '<br>';
        echo 'File path: '. $file->getRealPath();
        echo '<br>';
        echo 'File name: '. $file->getSize();
        echo '<br>';
        echo 'File name: '. $file->getMimeType();
        echo '<br>';
        $destinationPath= "images";

        $path = $request->file('file')->store('avatars');

       return  $path;
       
        
    }
}
