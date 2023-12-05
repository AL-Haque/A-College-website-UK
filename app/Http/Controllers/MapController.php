<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller

    {
        public function index(){

         $maps =Map::latest()->paginate(5);
         $map =Map::first();
         return view('admin.map.index', compact('maps','map'));

        }


        public function store(Request $request)
        {
            $this->validate(\request(),
                [

                    'map_url' => 'required',

                ]);

            Map::create([
                 'map_url' =>\request('map_url'),
            ]);

            return redirect()->back()->with('success',' map Url Store  Sucessfully');

        }



        public function edit($id){
         $maps = Map::latest()->paginate(5);
         $map = Map::find($id);
         return view ('admin.map.edit',compact('maps','map'));
     }



     public function update(Request $request, $id){

         $maps =Map::find($id);
         $maps->map_url = $request->input('map_url');

         $maps->update();
         return redirect()->route('map.index')->with('success','Url Updated Sucessfully');


     }

     public function delete(Request $request, $id)
     {

         $maps =Map::find($id);
         $maps->map_url = $request->input('map_url');

         $maps->delete();
         // if(Storage::delete($data->filename)) {
         //     $data->delete();
         //  }
         return redirect()->route('map.index')->with('success','mapUrl Deleted successfully');;
     }


}
