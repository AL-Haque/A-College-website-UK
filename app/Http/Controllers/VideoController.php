<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
   public function index(){

    $videos =Video::latest()->paginate(5);
    $video =Video::first();
    return view('video.index', compact('videos','video'));

   }


   public function store(Request $request)
   {
       $this->validate(\request(),
           [

               'video_url' => 'required',

           ]);

       Video::create([
            'video_url' =>\request('video_url'),
       ]);

       return redirect()->back()->with('success',' Video Url Store  Sucessfully');

   }



   public function edit($id){
    $videos = Video::latest()->paginate(5);
    $video = Video::find($id);
    return view ('video.edit',compact('videos','video'));
}



public function update(Request $request, $id){

    $videos =Video::find($id);
    $videos->video_url = $request->input('video_url');

    $videos->update();
    return redirect()->route('video.index')->with('success','Url Updated Sucessfully');


}

public function delete(Request $request, $id)
{

    $videos =Video::find($id);
    $videos->video_url = $request->input('video_url');

    $videos->delete();
    // if(Storage::delete($data->filename)) {
    //     $data->delete();
    //  }
    return redirect()->route('video.index')->with('success','Video Url Deleted successfully');;
}





}
