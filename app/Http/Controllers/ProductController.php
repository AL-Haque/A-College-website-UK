<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $product =Product::latest()->paginate(5);
        $pro =Product::first();
        $category = Category::with('product')->latest()->get();
        $subcategory =Subcategories::with('product')->latest()->get();
        return view('product.index',compact(['product','category','subcategory','pro']));
    }



    public function store(){

        $this->validate(\request(),
        [
            'name' => 'required',
            'category_id' => 'required',
            'sub_id' => 'required',
            'description'=> 'required',
            'image'=> 'required',
        ]);

        $productImage='';
        try{
            $productExtension = \request()->file('image')->extension();
            $productImage = "employee" . uniqid() . "_" . time() . '.' .$productExtension;

            \request()->file('image')->move('images',$productImage);
            // dd($employeeImage);
        }catch(\Exception $e){
          dd($e->getMessage());
        }


        Product::create([
            'name' =>\request('name'),
            'category_id' =>\request('category_id'),
            'sub_id' =>\request('sub_id'),
            'description' =>\request('description'),
            'image' =>$productImage,
        ]);


        return redirect()->back();


    }



    public function edit($id){
        $product = Product::latest()->paginate(5);
        $productt = Product::find($id);
        $category = Category::with('product')->latest()->get();
        $subcategory =Subcategories::with('product')->latest()->get();
        return view ('product.edit',compact('product','productt','category','subcategory'));

 }


 public function update(Request $request,$id){

    $product = Product::find($id);
    $product->name = $request->input('name');
    $product->category_id = $request->input('category_id');
    $product->sub_id = $request->input('sub_id');
    $product->description = $request->input('description');


    if($request->hasFile('image'))
    {
        $destination = 'images/'. $product->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $file->move('images/', $filename);
        $product->image = $filename;
    }
    $product->update();
    return redirect()->route('product.index')->with('success','Product Information Added Successfully');

}


public function delete(Request $request, $id)
{

    $product = Product::find($id);
    $product->name = $request->input('name');
    $product->category_id = $request->input('category_id');
    $product->sub_id = $request->input('sub_id');


    $file ='images/' . $product->filename;

    $product->delete();
    // if(Storage::delete($data->filename)) {
    //     $data->delete();
    //  }
    return redirect()->route('product.index')->with('success','Product Information Deleted Successfully');;
}


}
