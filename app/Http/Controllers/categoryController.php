<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function index()
    {
        $category = Category::latest()->paginate(5);
        return view('category.index', compact('category'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'title' => 'required',
            ]);

        Category::create([
            'title' => \request('title'),
        ]);

        return redirect()->back()->with('success','Category Information Added Successfully');

    }

    public function edit($id)
    {
        $category = Category::latest()->paginate(5);
        $cat = Category::find($id);
        return view('category.edit', compact('category','cat'));
    }

    public function update(Request $request, $id)
    {
        $category =Category::first();
        $category->title= $request->input('title');
        $category->update();
        // dd( $category);
        return redirect()->route('category.index')->with('success','Category Information Added Successfully');
    }

    public function delete(Request $request, $id)
    {

        $category = Category::first();
        $category->title = $request->input('title');
        $category->delete();

        return redirect()->route('category.index')->with('success','Category Information Deleted Successfully');;

    }

}
