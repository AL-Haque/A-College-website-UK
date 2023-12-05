<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index(){
        $employee =Employee::latest()->paginate(5);
        $employ=Employee::first();
        return view('employee.index',compact('employee','employ'));
    }

    public function store(){

        $this->validate(\request(),
        [
          'name' => 'required',
          'employee_id' => 'required',
          'email'=> 'required',
          'present'=> 'required',
          'permanent'=> 'required',
          'phone'=> 'required',
          'designation'=> 'required',
          'facebook'=> 'required',
          'linkdIn'=> 'required',
          'image'=> 'required',

        ]);

        $employeeImage='';
        try{
            $employeeExtension = \request()->file('image')->extension();
            $employeeImage = "employee" . uniqid() . "_" . time() . '.' .$employeeExtension;

            \request()->file('image')->move('images',$employeeImage);
            // dd($employeeImage);
        }catch(\Exception $e){
          dd($e->getMessage());
        }





        Employee::create([
            'name' =>\request('name'),
            'employee_id' =>\request('employee_id'),
            'email' =>\request('email'),
            'present' =>\request('present'),
            'permanent' =>\request('permanent'),
            'phone' =>\request('phone'),
            'designation' =>\request('designation'),
            'facebook' =>\request('facebook'),
            'linkdIn' =>\request('linkdIn'),
            'image' =>$employeeImage,
        ]);



        return redirect()->back();
    }

  public function edit($id){
    $employee = Employee::latest()->paginate(5);
    $employ = Employee::find($id);
    return view('employee.edit',compact('employee','employ'));
  }

public function update(Request $request,$id){

    $employee = Employee::find($id);
    $employee->name = $request->input('name');
    $employee->employee_id = $request->input('employee_id');
    $employee->email = $request->input('email');
    $employee->present = $request->input('present');
    $employee->permanent = $request->input('permanent');
    $employee->phone = $request->input('phone');
    $employee->designation = $request->input('designation');
    $employee->facebook = $request->input('facebook');
    $employee->linkdIn = $request->input('linkdIn');


    if($request->hasFile('image'))
    {
        $destination = 'images/'. $employee->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $file->move('images/', $filename);
        $employee->image = $filename;
    }
    $employee->update();
    return redirect()->route('employee.index')->with('success','Employee Information Added Successfully');

}

public function delete(Request $request, $id)
{

    $employee = Employee::find($id);
    $employee->name = $request->input('name');
    $employee->employee_id = $request->input('employee_id');
    $employee->email = $request->input('email');
    $employee->present = $request->input('present');
    $employee->permanent = $request->input('permanent');
    $employee->phone = $request->input('phone');
    $employee->designation = $request->input('designation');
    $employee->facebook = $request->input('facebook');
    $employee->linkdIn = $request->input('linkdIn');

    $file ='images/' . $employee->filename;

    $employee->delete();
    // if(Storage::delete($data->filename)) {
    //     $data->delete();
    //  }
    return redirect()->route('employee.index')->with('success','Service Information Deleted Successfully');;
}

}
