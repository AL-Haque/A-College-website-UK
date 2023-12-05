<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsEventController extends Controller
{
    public function index(){
        $newsEvent =NewsEvent::latest()->paginate(5);
        $newsEvents =NewsEvent::first();
        return view('NewsEvent.index',compact('newsEvent','newsEvents'));
    }

    public function store(){

        $this->validate(\request(),
        [

          'news_title'=> 'required',
          'news_details'=> 'required',
          'news_description'=> 'required',
          'news_image'=> 'required',

        ]);



        $newsImage='';
        try{
            $folder_name="news";
            $getImage= \request()->file('news_image');
            $getNews= storeimages($folder_name, $getImage);
            // $newsExtension = \request()->file('news_image')->extension();
            // $newsImage = "news" . uniqid() . "_" . time() . '.' .$newsExtension;

            // \request()->file('news_image')->move('images/',$newsImage);
            // dd($employeeImage);
        }catch(\Exception $e){
          dd($e->getMessage());
        }



        // $eventImage='';
        // try{
        //     $folder_name="events";
        //     $getImage= \request()->file('event_image');
        //     $getEvents = storeimages($folder_name, $getImage);

        //     // $eventExtension = \request()->file('event_image')->extension();
        //     // $eventImage = "news" . uniqid() . "_" . time() . '.' .$eventExtension;

        //     // \request()->file('event_image')->move('images/',$eventImage);
        //     // // dd($employeeImage);
        // }catch(\Exception $e){
        //   dd($e->getMessage());
        // }





        NewsEvent::create([
            'news_title' =>\request('news_title'),
            'news_details' =>\request('news_details'),
            'news_description' =>\request('news_description'),
            'news_image' =>$getNews,
        ]);



        return redirect()->back();
    }

    public function edit($id){
        $newsEvent = NewsEvent::latest()->get();
        $eventNews = NewsEvent::find($id);
        return view('NewsEvent.edit',compact('newsEvent','eventNews'));
      }


      public function update(Request $request)
      {

          $newsEvent = NewsEvent::first();

          $newsEvent->news_title = $request->input('news_title');
          $newsEvent->news_details = $request->input('news_details');
          $newsEvent->news_description = $request->input('news_description');
          $newsEvent->news_image = $request->input('news_image');
        //   if ($request->hasFile('event_image')) {
        //     // $folder_name="news";
        //     // $setImage = $newsEvent->event_image;
        //     // $getImage = $request->file('event_image');

        //     //images($folder_name, $setImage,$getImage);

        //       $destination = 'images/' . $newsEvent->event_image;
        //       if (File::exists($destination)) {
        //           File::delete($destination);
        //       }
        //       $file = $request->file('event_image');
        //       $extension = $file->getClientOriginalExtension();
        //       $filename = time() . '.' . $extension;
        //       $file->move('images/', $filename);
        //       $newsEvent->event_image = $filename;
        //   }
          if ($request->hasFile('news_image')) {
              $destination = 'images/' . $newsEvent->news_image;
              if (File::exists($destination)) {
                  File::delete($destination);
              }
              $file = $request->file('news_image');
              $extension = $file->getClientOriginalExtension();
              $filename = time() . '.' . $extension;
              $file->move('images/', $filename);
              $newsEvent->news_image = $filename;
          }
          $newsEvent->update();
          return redirect()->back()->with('success','News Events  Information Added');

      }


      public function delete(Request $request, $id)
      {

          $newsEvent = NewsEvent::find($id);
          $newsEvent->news_title = $request->input('news_title');
          $newsEvent->news_details = $request->input('news_details');
          $newsEvent->news_description = $request->input('news_description');

          $file ='images/'.$newsEvent->news_image;

          $newsEvent->delete();
          // if(Storage::delete($data->filename)) {
          //     $data->delete();
          //  }
          return redirect()->route('news_event.index')->with('success','News Events Deleted Successfully');;
      }






}
