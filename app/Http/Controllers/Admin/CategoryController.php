<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.Category.index', compact('category'));
    }

    public function add()
    {
        return view('admin.Category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/dashboard')->with('status','Category Added Successfully');
    }

    public function editProduct($id)
    {
        $category = Category::find($id);
        return view('admin.Category.updateProduct', compact('category'));
    }

    public function updateProduct(Request $request)
    {
        $id = $request->id;
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->update();
        return redirect('/categories')->with('status','Category Update Successfully');

    }

    public function destory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('status','Category Deleted Successfully');
    }
}
