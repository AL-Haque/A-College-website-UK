<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategories;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {

        $category = Category::latest()->get();
        $subcategory = Subcategories::with('category')->latest()->paginate(5);
        return view('subCategory.subcategory', compact('subcategory', 'category'));
    }

    public function store(Request $request)
    {
        $this->validate(\request(),
            [
                'sub_category' => 'required',
                'category_id' => 'required',

            ]);

        Subcategories::create([
            'sub_category' => \request('sub_category'),
            'category_id' => \request('category_id'),

        ]);

        return redirect()->back()->with('success','Sub-Category Information Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::latest()->get();
        $subCategory = Subcategories::with('category')->latest()->paginate(5);
        $sub = Subcategories::find($id);
        //dd($sub);
        return view('subCategory.edit', compact('subCategory', 'sub', 'category'));

    }

    public function update(Request $request, $id)
    {
        $sub = Subcategories::find($id);
        $sub->sub_category = $request->input('sub_category');
        $sub->category_id = $request->input('category_id');

        $sub->update();
        return redirect()->route('subCategory.index')->with('success','Sub-Categories Added Successfully' );
    }



    public function delete(Request $request, $id){

        $sub = Subcategories::find($id);
        $sub->sub_category = $request->input('sub_category');
        $sub->category_id = $request->input('category_id');

        $sub->delete();
        return redirect()->route('subCategory.index')->with('error','Sub-Categories Deleted Successfully' );
    }

}
