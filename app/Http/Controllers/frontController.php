<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function showProduct(){
        return view('Frontend.Layouts.User.product');
    }
    public function showOffer(){
        return view('Frontend.Layouts.User.offerFront');
    }
    public function showBlog1(){
        return view('Frontend.Layouts.User.offerBlog1');
    }
    public function showBlog2(){
        return view('Frontend.Layouts.User.offerBlog2');
    }
    public function showBlog3(){
        return view('Frontend.Layouts.User.offerBlog3');
    }
    public function showLoginPage(){
        return view('Frontend.Layouts.UserLogin.login');
    }
    public function showRegisterPage(){
        return view('Frontend.Layouts.UserLogin.register');
    }
    public function showCategoryPage(){
        return view('Frontend.Layouts.User.category');
    }
}
