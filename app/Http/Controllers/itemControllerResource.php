<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_item;
use DB;
use Auth;
use validate;

class itemControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product_item::orderby('id','DESC')->get();
        return view('Backend.components.viewItem_r', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.components.viewItem_r');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'sl' => 'required',
            'item_name' => 'required|unique:product_items|max:255|min:3'
        ]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = product_item::findOrFail($id);

        return view('Backend.components.edit_item', compact('data', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = product_item::findOrFail($id);

        return view('Backend.components.editItems', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
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
