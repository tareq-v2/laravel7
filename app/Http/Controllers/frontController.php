<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_item;
use App\products;
use App\category;
use validate;
use Auth;
use DB;

class frontController extends Controller
{
    public function showProduct(){
        $product = products::all();
        return view('Frontend.Layouts.User.product', compact('product'));
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
