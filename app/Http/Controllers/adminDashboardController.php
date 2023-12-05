<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class adminDashboardController extends Controller
{
    public function formElements()
    {

        return view('admin.adminFromElements');
    }

    public function index()
    {
        $companies = Company::first();
        return view('admin.companyInformation', compact('companies'));
    }

//     public function store(){

//         $this->validate(\request(),[

//                'name' =>'required',
//                'email' =>'required',
//                'facebook' =>'required',
//                'logo' =>  'required|image|mimes:jpeg,jpg,png|max:2048',
//                'image' =>  'required|image|mimes:jpeg,jpg,png|max:2048',
//                'instragram' =>'required',
//                'linkdln' =>'required',
//                'twitter' =>'required',

//         ]);

//         $image='';
//         try{
//             $imageExtension =\request()->file('image')->extension();
//             $image = "company" . uniqid() . "_" . time() . '.' .$imageExtension;

//             \request()->file('image')->move('images',$image);

//         }catch(\Exception $e){
//           dd($e->getMessage());
//         }

//         $logo='';
//         try{
//             $logoExtension =\request()->file('logo')->extension();
//             $logo = "companylogo" . uniqid() . "_" . time() . '.' .$logoExtension;

//             \request()->file('logo')->move('images',$logo);
//         }catch(\Exception $e){
//           dd($e->getMessage());
//         }

//       Company::create([

//             'name' =>\request('name'),
//             'email' =>\request('email'),
//             'facebook' =>\request('facebook'),
//             'logo' =>$logo,
//             'image' =>$image,
//             'instragram' =>\request('instragram'),
//             'linkdln' =>\request('linkdln'),
//             'twitter' =>\request('twitter'),

//   ]);
//           return redirect()->back();

//     }

    // public function edit($id){

    //     $companies=Company::all();

    //     return view('admin.companyInformation',compact('companies'));

    // }

    public function update(Request $request)
    {
        $this->validate(\request(),
        [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'instragram' => 'required',
            'linkdln' => 'required',
            'twitter' => 'required',
            'slogun' => 'required',
            'about' => 'required',
            'note' => 'required',
            // 'image' => 'required',
        ]);

        $companies = Company::first();
        $companies->name = $request->input('name');
        $companies->email = $request->input('email');
        $companies->address = $request->input('address');
        $companies->phone = $request->input('phone');
        $companies->facebook = $request->input('facebook');
        $companies->instragram = $request->input('instragram');
        $companies->linkdln = $request->input('linkdln');
        $companies->twitter = $request->input('twitter');
        $companies->slogun = $request->input('slogun');
        $companies->about = $request->input('about');
        $companies->note = $request->input('note');

        if ($request->hasFile('image')) {
            $destination = 'images/' . $companies->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = "image" .'.' . $extension;
            $file->move('images/', $filename);
            $companies->image = $filename;
        }
        if ($request->hasFile('logo')) {
            $destination = 'images/' . $companies->logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $companies->logo = $filename;
        }
        $companies->update();
        return redirect()->back()->with('success','Company Information Added');

    }



}
