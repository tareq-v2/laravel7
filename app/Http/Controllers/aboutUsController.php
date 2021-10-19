<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\aboutUs;

class aboutUsController extends Controller
{
    public function index(){

        $data = DB::table('about_us')->get()->first();
        return view('Backend.components.addAbout', compact('data'));
    }
    public function aboutus_store(request $request){
        DB::table('about_us')->where('id', $request->id)->update($request->except('_token'));
        return redirect()->back()->with('Success', 'Data Updated Successfully');
    }
}
