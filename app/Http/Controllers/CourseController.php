<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    public function index()
    {

        $course = Course::latest()->paginate(5);
        $coursess = Course::first();
        return view('course.index', compact('course', 'coursess'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'duration' => 'required',
                'description' => 'required',
                'image' => 'required',

            ]);

        $courseImage = '';
        try {
            $courseExtension = \request()->file('image')->extension();
            $courseImage = "course" . uniqid() . "_" . time() . '.' . $courseExtension;

            \request()->file('image')->move('images', $courseImage);
            // dd($employeeImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Course::create([
            'name' => \request('name'),
            'duration' => \request('duration'),
            'description' => \request('description'),
            'image' => $courseImage,
        ]);
        return redirect()->back();

    }

    public function edit($id)
    {
        $course = Course::latest()->paginate(5);
        $courses = Course::find($id);
        return view('course.edit', compact('course', 'courses'));
    }

    public function update(Request $request, $id)
    {

        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->duration = $request->input('duration');
        $course->description = $request->input('description');

        if ($request->hasFile('image')) {
            $destination = 'images/' . $course->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $course->image = $filename;
        }
        $course->update();
        return redirect()->route('course.index')->with('success', 'Course Information Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->duration = $request->input('duration');
        $file = 'images/' . $course->filename;

        $course->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('course.index')->with('error', 'Course Information Deleted Successfully');
    }

}
