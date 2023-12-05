<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class sliderController extends Controller
{

    public function index()
    {
        $slider =Slider::latest()->paginate(5);
        $slid =Slider::first();
        return view('slider.index', compact('slider','slid'));
    }
    // public function slider_update(){
    //     $slider = Slider::latest()->get();
    //     return view('slider.slider_update',compact('slider'));
    // }

    public function store(Request $request)
    {
        $this->validate(\request(),
            [

                'image' => 'required|image|mimes:jpeg,jpg,png',

            ]);

        $sliderImage = '';
        try {
            $extension = \request()->file('image')->extension();
            $filename = $filename = time() . '.' . $extension;

            \request()->file('image')->move('images', $filename);
            // dd($sliderImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Slider::create([
            'image' => $filename,
        ]);

        return redirect()->back()->with('success',' Slider Information Save Sucessfully');

    }

    public function edit($id)
    {

        // $slider = Slider::find($id);
        $slider = Slider::latest()->paginate(5);
        $slide = Slider::find($id);

        return view('slider.slider_update', compact('slider','slide'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $destination = 'images/' . $slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $slider->image = $filename;
        }
        $slider->update();
        return redirect()->route('slider.index')->with('success','Slider Information Update Sucessfull');
    }

    public function delete(Request $request, $id)
    {
        $slider = Slider::find($id);
        $file ='images/' . $slider->filename;

        $slider->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('slider.index')->with('success',' Slider Information Deleted Successfully');

    }

}
