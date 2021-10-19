<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product_item;
use validate;
use Auth;
use DB;


class categoryController extends Controller
{
    public function categoryView(){
        $data = category::orderby('id', 'DESC')->get();
        return view('Backend.components.viewCategory', compact('data'));
    }
    public function create(){
        $data = product_item::orderby('id', 'DESC')->get();
        return view('Backend.components.addCategory', compact('data'));
    }
    public function store(request $request){
        $validator = $request->validate([
            'id' => 'required',
            'category_name' => 'required|unique:category|max:255|min:3',
            'item_name' => 'required|unique:category|max:255|min:3'
        ]);

        $insert = category::create($request->except('_token', 'image'));

        $file = $request->file('image');
        
        if($file){
            $image_name = $insert->id.'.'.$file->getClientOriginalExtension();
            $path = 'Backend/categoryImage';
            $file->move(public_path('Backend/categoryImage'), $image_name);
            $imageurl = $path.'/'.$image_name;
            category::where('id', $insert->id)->update(['image'=>$imageurl]);
        }
        return redirect()->back()->with('success', 'Successfully Done !');
    }

    public function edit($id){
        $data = category::findOrFail($id);

        return view('Backend.components.editCategory', compact('data', 'id'));
    }

    // update category function here
    public function update(request $request, $id){
        $validator = $request->validate([
            'id' => 'required',
            'category_name' => 'required|max:255|min:3',
            'item_name' => 'required|max:255|min:3'
        ]);

        // Now Insert the updated data on existing database

        $insert = category::find($id)->update($request->except('_token', 'image'));
        $file = $request->file('image');

        if($file){
            $pathImage = category::findOrFail($id);
            $path = base_path().'/public'.$pathImage->image;

            if(file_exists($path)){
                unlink($path);
            }

            $image_name = $id.'.'.$file->getClientOriginalExtension();
            $path = '/Backend/categoryImage';
            $file->move(public_path('Backend/categoryImage'), $image_name);

            $imageurl = $path.'/'.$image_name;

            category::where('id', $id)->update(['image'=>$imageurl]);
        }

        return redirect()->back()->with('info', 'Update successfully Done !');
    }


    // Method For delete Data
    public function delete($id){
        $pathImage = category::findOrFail($id);

        $path = base_path().'/public'.$pathImage->id;

        if(file_exists($path)){
            unlink($path);
        }

        category::find($id)->delete();

        return redirect()-back()->with('error', 'Delete Successfully Done !');
    }

}
