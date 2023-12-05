<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function index(){

        $photos =Photo::latest()->paginate(5);
        $photo =Photo::first();
        return view('admin.photo.index', compact('photos','photo'));
    }

    public function store(Request $request)
    {
        $this->validate(\request(),
            [

                'image' => 'required|image|mimes:jpeg,jpg,png',

            ]);

        $photo = '';
        try {
            $extension = \request()->file('image')->extension();
            $filename = $filename = time() . '.' . $extension;

            \request()->file('image')->move('images', $filename);
            // dd($sliderImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Photo::create([
            'image' => $filename,
        ]);

        return redirect()->back()->with('success',' Photo  Save Sucessfully');

    }


    public function edit($id)
    {

        // $slider = Slider::find($id);
        $photos = Photo::latest()->paginate(5);
        $photo = Photo::find($id);

        return view('admin.photo.edit', compact('photos','photo'));
    }


    public function update(Request $request, $id)
    {
        $photos = Photo::find($id);
        if ($request->hasFile('image')) {
            $destination = 'images/' . $photos->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $photos->image = $filename;
        }
        $photos->update();
        return redirect()->route('photo.index')->with('success','Photo Update Sucessfull');
    }



    public function delete(Request $request, $id)
    {
        $photos = Photo::find($id);
        $file ='images/' . $photos->filename;

        $photos->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('photo.index')->with('success',' Photo Deleted Successfully');

    }

}
