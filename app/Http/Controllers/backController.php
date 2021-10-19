<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class backController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminFront(){
        // $data =  User::first(); //,compact('data')
        return view('Backend.components.adminFront');
    }
}
