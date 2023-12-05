<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){
        $partner =Partner::latest()->get();
        return view('partner.index',compact('partner'));
    }

 public function store(){

    $this->validate(\request(),
    [
      'name' => 'required',
      'image'=> 'required',
    ]);

    $partnerImage='';
    try{
        $partnerExtension = \request()->file('image')->extension();
        $partnerImage = "partner" . uniqid() . "_" . time() . '.' .$partnerExtension;

        \request()->file('image')->move('images',$partnerImage);
        // dd($partnerImage);
    }catch(\Exception $e){
      dd($e->getMessage());
    }


    Partner::create([
        'name' =>\request('name'),
        'image' =>$partnerImage,
    ]);



    return redirect()->back();
 }


 public function edit($id){

$partner=Partner::all();
return view('partner.index',compact('partner'));

 }
}
