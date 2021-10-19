<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addAboutController extends Controller
{
    public function index(){
        return view('Backend..components.addAbout');
    }
}
