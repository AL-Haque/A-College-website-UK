<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Employee;
use App\Models\NewsEvent;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
     $info=Company::latest()->get()->take(1);
     $service=Service::latest()->get()->take(4);
     $photo=Photo::latest()->get()->take(8);
     $employee=Employee::latest()->get()->take(12);
     $course=Course::latest()->get()->take(4);
     $newsEvents=NewsEvent::latest()->get()->take(3);
     $newsEvent=NewsEvent::latest()->get()->take(1);
     $videos=Video::latest()->get()->take(1);
     $video=Video::latest()->get()->skip(1)->take(1);
     $vide=Video::latest()->get()->skip(2)->take(1);
     $vid=Video::latest()->get()->skip(3)->take(1);
     $vi=Video::latest()->get()->skip(4)->take(1);
     $slider=Slider::latest()->get()->take(1);
     $slide=Slider::latest()->get()->skip(1)->take(2);
    return view('web.index',compact('info','service','photo','employee','course','newsEvents','videos','newsEvent','video','vide','vid','vi','slider','slide'));
    }


//     public function header(){

//        $header=Company::latest()->get();
//        return view('web.header',compact('header'));
//    }



// public function footer(){

//     $footer=Company::get();
//    return view('web.footer',compact('footer'));
// }


public function course(){
    $info=Company::latest()->get()->take(1);
     $courseDetails=Course::latest()->get();
    return view('web.course.index',compact('courseDetails','info'));
}


public function courseDetails($id){
    $info=Company::latest()->get()->take(1);
    $courses=Course::latest()->find($id);
   return view('web.course.details',compact('courses','info'));
}


public function newsEvents(){
    $info=Company::latest()->get()->take(1);
      $newsEvent=NewsEvent::latest()->get();
   return view('web.events.index',compact('newsEvent','info'));
}


public function news($id){
    $info=Company::latest()->get()->take(1);
    $newsDetails=NewsEvent::latest()->find($id);
   return view('web.events.details',compact('newsDetails','info'));
}


public function photoGallery(){
    $info=Company::latest()->get()->take(1);
    $photoGallery=Photo::latest()->get();
   return view('web.photo.index',compact('photoGallery','info'));
}

public function videoGallery(){
    $info=Company::latest()->get()->take(1);
    $videoGallery=Video::latest()->get()->take(3);
    $videos=Video::latest()->get()->take(1);
   return view('web.video.index',compact('videoGallery','videos','info'));
}


public function faculty(){
    $info=Company::latest()->get()->take(1);
    $faculty=Employee::latest()->get();
   return view('web.faculty.index',compact('faculty','info'));
}


public function facultyDetails($id){
    $info=Company::latest()->get()->take(1);
    $faculties=Employee::find($id);
   return view('web.faculty.details',compact('faculties','info'));
}


public function about(){
    $info=Company::latest()->get()->take(1);
   $about=Company::all()->take(1);
   return view('web.about.index',compact('about','info'));
}


 public function contact(){
    $info=Company::latest()->get()->take(1);
    return view('web.contact.index', compact('info'));
 }

 public function store(){
    $this->validate(\request(),
    [
        'name' =>  'required',
        'email' =>  'required',
        'address' =>  'required',
        'question' =>  'required',

    ]);

    Contact::create([
        'name' =>\request('name'),
        'email' =>\request('email'),
        'address' =>\request('address'),
        'question'=>\request('question'),
    ]);
    return redirect()->back();

 }

  public function vacancy(){
    $info=Company::latest()->get()->take(1);
    return view('web.vacancy.index', compact('info'));
  }


}
