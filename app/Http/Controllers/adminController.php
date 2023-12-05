<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Course;
use App\Models\Employee;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Subcategories;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\User as AuthUser;

class adminController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->back();
        }else
        // return view('login');
        return view('admin.login');
    }

public function authCheck(Request $request) {

    $request->validate([
        'username' => 'required',
        'password' => 'required',

    ]);

    $credential = $request->only('username', 'password');

    if(Auth::attempt($credential)) {
        return redirect()->route('dashboard')->with('success','Login Sucessfull');
    }
     else {
        return redirect()->withInput();
    }

}


    public function logout ()
    {

        Auth::logout();
        return redirect()->route('login');
    }




public function dashboard(){

    $data['user'] = count(User::all());
        $data['slider'] = count(Slider::all());
        $data['employee'] = count(Employee::all());
        $data['service'] = count(Service::all());
        $data['course'] = count(Course::all());
        $data['photo'] = count(Photo::all());

    return view('admin.dashboard',$data);
}


public function password (){
    return view('admin.PasswordReset.ForgotPassword');
}

public function ForgotPassword(Request $request){

    $request->validate([
        'email'=> "required|email|exists:users",
    ]);

    $token =Str::random(64);


DB::table('password_resets')->insert([
    'email'=>$request->email,
    'token'=>  $token,
    'created_at'=>Carbon::now()
]);

Mail::send("admin.emails.ResetPassword",['token'=> $token],function($massage) use ($request){
    $massage->to($request->email);
    $massage->subject("Reset Password");
});

 return redirect()->to(route('password'))->with("success","We Have Send a email to Reset Password");
}

public function ResetPassword($token){

     return view('admin.PasswordReset.NewPassword',compact('token'));
}



public function ResetPass(Request $request){

$request->validate([
    'email'=> "required|email|exists:users",
    'password'=>"required",
    'password_confirmation'=>'required'
]);

  $updatePassword=DB::table('password_resets')
  ->where([
    'email'=>$request->email,
    'token'=>$request->token,
  ])->first();

  if(!$updatePassword){
    return redirect()->to(route('ResetPassword'))->with('error','Invalid');
  }
  User::where('email',$request->email)
  ->update(['password'=>Hash::make($request->password)]);
  DB::table('password_resets')->where(['email'=>$request->email])->delete();
  return redirect()->to(route('login'))->with('success','password reset successfull');
}
}
