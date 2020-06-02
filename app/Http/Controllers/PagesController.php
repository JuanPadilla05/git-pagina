<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    /*public function welcome(){ 
               
        return view('welcome');
    }*/

    public function index(){ 

        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function login(){
        $login =App\User::all();
        return view('login',compact('login'));
    }

    public function products(){
        $product =App\Product::all();
        return view('products',compact('product'));
    }

    public function register(){
        $user =App\User::all();
        return view('register',compact('user'));
    }

    public function services(){
        return view('services');
    }

    public function contac(){
        return view('contac');
    }

}
