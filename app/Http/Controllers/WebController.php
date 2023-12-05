<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{

public function service(){
    $info=Company::latest()->get();
    $services=Service::all();
   return view('web.service.index',compact('services','info'));
}


public function details($id){
    $info=Company::latest()->get()->take(1);
    $service=Service::find($id);
   return view('web.service.details',compact('service','info'));
}


}
