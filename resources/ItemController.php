<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_item;
use App\product_category;
use App\product_product_info;
use DB;
use Auth;
use validate;

class ItemController extends Controller
{
     public function index()
    {
        //Query Builder
       // $data =  DB::table('product_item')->orderby('sl','ASC')->get();

        // ORM

        $data = product_item::orderby('sl','DESC')->get();
        return view('Backend.Item.index',compact('data'));
    }
     public function create()
    {
        return view('Backend.Item.create');
    }
     public function store(Request $request)
    {

         $validator = $request->validate([
        'item_name' => 'required|unique:product_item|max:255',
        'sl' => 'required',
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

// 11.jpg

       // $insert =  product_item::create($request->except('_token'));


          $file = $request->file('image');
         if($file)
         {
            $image_name = $insert->id.'.'.$file->getClientOriginalExtension();
            $path = '/Backend/ItemImage';
            $file->move(public_path('Backend/ItemImage'),$image_name);




            // product_item::where('id',$insert->id)->update(['image'=>$path.'/'.$image_name]);

            // DB::table('product_item')->where('id',$insert)->update(['image'=>$path.'/'.$image_name]);

         }





        // return redirect()->back()->with('success','successfully done');
        return redirect('item-view');





    }

    public function delete($id)
    {
        // return $id;

        // DB::table('product_item')->where('id',$id)->delete();
       $pathimage =  product_item::find($id);
        product_item::find($id)->delete();

        $path=$pathimage->image;


        if($path)
        {
            unlink($path);
        }

               return redirect()->back()->with('error','Delete successfully done');
    }

}
