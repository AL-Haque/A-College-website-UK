<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function showRegister(){

        return view ('user.userRegistration');
    }


    public function register(){


        $this->validate(\request(),
            [
               'name' =>'required|min:4 |alpha_dash|unique:users,name',
                'email' =>'required|email|unique:users,email',
                'password'=> 'required|min:4|alpha_dash',

            ]);


            User::create([

                'name' =>\request('name'),
                'email' =>\request('email'),
                'password'=> bcrypt(\request('password')),

            ]);

            return to_route('userShowLogin');

        }



        public function userShowLogin(){

            return view ('user.login');
        }


        public function userLogin(){

            $this->validate(\request(),
            [
                'name' =>'required',

                'password'=> 'required',

            ]);



            if (Auth::attempt([

                'name'=>\request('name'),
                'password'=>\request('password'),


            ])){

               return  redirect()->back();



            }else{
                return 'crediantial doesnot match';
            }


        }


 }



