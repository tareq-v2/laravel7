<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_item;
use App\products;
use App\category;
use validate;
use Auth;
use DB;

class productController extends Controller
{
    public function create(){

    //    

    $data = product_item::all();

    $cat = category::all();

    
        return view('Backend.components.addProduct',compact('data', 'cat'));
    }

    public function store(Request $request)
    {
      
        // dd($request->all());
        $validator = $request->validate([
            'product_name'=> 'required',
            'item_name'=> 'required', 
            'category_name'=> 'required',
            'sale_price'=> 'required',
        ]);

      

        $insert = products::create([
            'product_name'=>$request->product_name,
            'item_id'=>$request->item_name,
            'category_id'=>$request->category_name,
            'sale_price'=>$request->sale_price,
            'old_price'=>$request->old_price,
            'description'=>$request->description,
        ]);

        $file= $request->file('image');

        if($file)
        {
            $image_name = $insert->id.'.'.$file->getClientOriginalExtension();

            $file->move(public_path('Backend/productImage'),$image_name);

            products::where('id',$insert->id)->update(['image'=>$image_name]);
        }

        return redirect()->back()->with('success','Data Insert Succesfully!');

    }

    public function productView(){
        

        // $item = product_item::all();
        // $cat = category::all();
         $data = products::join('product_items','product_items.id','products.item_id')
        ->join('category','category.id','products.category_id')
        ->select('products.*','category.category_name','product_items.item_name')->get();


        $product = products::all();

        return view('Backend.components.viewProduct',compact('data'));
    }
    public function edit($id){
        $data = products::find($id);

        return view('Backend.components.editProduct',compact('data','id'));
    }
    public function update(Request $request,$id)
    {
        $validator = $request->validate([
            'item_id'=> 'required', 
            'category_id'=> 'required',
            'product_name'=> 'required',
            'sale_price'=> 'required',
        ]);

       
        $pathImage= products::findOrFail($id);


        $insert = products::find($id)->update($request->except('_token','image'));

       

        $file = $request->file('image');

        if($file)
        {
            $image_name = $id.'.'.$file->getClientOriginalExtension();

            $file->move(public_path('Backend/productImage'),$image_name);
           
            product::find($id)->update(['image'=>$image_name]);
        }

        return redirect()->back()->with('info','Data Update Succesfully!');

    }
    public function delete($id)
    {
        
        $pathImage = products::find($id);

        $path=base_path().'/public/Backend/productImage/'.$pathImage->image;

       
        if(file_exists($pathImage->image))
        {
            unlink($path);
        }

        products::find($id)->delete();

        return redirect()->back()->with('error','Data Delete Succesfully!');
    } 
}
