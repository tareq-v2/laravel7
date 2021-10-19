<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_item;
use DB;
use Auth;
use validate;

class itemController extends Controller
{
    // func for getting data
    public function itemView(){
        $data = product_item::orderby('id','DESC')->get();
        return view('Backend.components.viewItem', compact('data'));
    }
    public function create(){
        return view('Backend.components.addItems');
    }
    public function store(request $request){
        $validator = $request->validate([
            'sl' => 'required',
            'item_name' => 'required|unique:product_items|max:255|min:3'
        ]);

        //        if ($validator->fails()) {
        //     return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
         // dd($request->all());

        // Query Builder
        // DB::table('product_item')->insert([
        //     'item_name'=> $request->item_name,
        //     'sl'=> $request->sl,
        //     'admin_id'=>Auth()->user()->id
        // ]);

         // $insert = DB::table('product_item')->insertGetId($request->except('_token'));

         // return $insert;


        //ORM

        // product_item::create([
        //     'item_name'=> $request->item_name,
        //     'sl'=> $request->sl,
        //     'admin_id'=>Auth()->user()->id
        //     ]);
        
        $insert = product_item::create($request->except('_token', 'image'));

        $file = $request->file('image');
        if($file){
            $image_name = $insert->id.'.'.$file->getClientOriginalExtension();
            $path = 'Backend/ItemImage';
            $file->move(public_path('Backend/ItemImage'), $image_name);
            $imageurl = $path.'/'.$image_name;
            product_item::where('id', $insert->id)->update(['image'=>$imageurl]);
            // Query Builder
            // DB::table('product_item')->where('id',$insert)->update(['image'=>$path.'/'.$image_name]);

        }

        return redirect()->back()->with('success', 'Successfully Done !');
        // return a View
        // return redirect('item-view');
    }


    // Edit method start here

    public function edit($id){
        // $data = DB::table('product_item')->where('id', $id)->first();

        $data = product_item::findOrFail($id);

        return view('Backend.components.editItems', compact('data', 'id'));
    }

    // Update Method Start Here
    public function update(Request $request, $id){
        $validator = $request->validate([
            'sl' => 'required',
            'item_name' => 'required|max:255|min:3'
        ]);

        // $insert = product_item::find($id)->update($request->except('_token'));

        $insert = product_item::find($id)->update($request->except('_token', 'image'));
        $file = $request->file('image');
        if($file){

            $pathimage = product_item::findOrFail($id);
            $path = base_path().'/public'.$pathimage->image;

            if(file_exists($path)){
                unlink($path);
            }

            $image_name = $id.'.'.$file->getClientOriginalExtension();
            $path = '/Backend/ItemImage';
            $file->move(public_path('Backend/ItemImage'),$image_name);

            $imageurl = $path.'/'.$image_name;

            product_item::where('id', $id)->update(['image'=>$imageurl]);
        }
        return redirect()->back()->with('info', 'Update Successfully Done !');
    }


    // method for delete data

    public function delete($id){

        // DB::table('product_item')->where('id', $id)->delete();
        $pathimage = product_item::findOrFail($id);

        // localhost for base path

        $path = base_path().'/public'.$pathimage->id;

        // any for url or assets
        if(file_exists($path)){
            unlink($path);
        }
        product_item::find($id)->delete();

        // Return with success message

        return redirect()->back()->with('error', 'Delete Successfully Done !');
    }

}
