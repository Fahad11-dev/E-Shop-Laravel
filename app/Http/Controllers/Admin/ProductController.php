<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
    {
        $product = Product::all();
        return view('admin.Product.index', compact('product'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.Product.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $product = new Product();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $product->image = $filename;
        }
        $product->category_id = $request->category_id;
        $product->product_title = $request->product_title;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('admin.Product.index')->with('status','Product Added Successfully');
    }

    public function editProduct(Request $request)
    {   
        $id = $request->id;
        $product = Product::findOrFail($id);
        return view('admin.Product.updateProduct', compact('product'));
    }

    public function updateProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/product/'.$product->image;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $product->image = $filename;

        }
        $product->category_id = $request->category_id;
        $product->product_title = $request->product_title;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->update();
        return redirect('/products')->with('status','Product Update Successfully');

    }

    public function destory($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products')->with('status','Product Deleted Successfully');
    }
}
