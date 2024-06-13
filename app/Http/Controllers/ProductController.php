<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $products = Product::search($request->search)->orderBy('id')->get();
        } else {
            $products = Product::all();
            $products = Product::orderBy('id')->get();
        }
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']), [
            "title" => "Product",
        ]);
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'), [
            'title' => 'Product',
        ]);
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'package' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
        ]);
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin.product.home'));
        } else {
            session()->flash('error', 'Some Problem Occure');
            return redirect(route('admin.product.create'));
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products', 'categories'), [
            'title' => 'Product',
        ]);
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('admin.product.home'));
        } else {
            session()->flash('error', 'Some Problem Occure');
            return redirect(route('admin.product.home'));
        }
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $title = $request->title;
        $category = $request->category;
        $package = $request->package;
        $price = $request->price;

        $products->title = $title;
        $products->category = $category;
        $products->package = $package;
        $products->price = $price;
        $data = $products->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin.product.home'));
        } else {
            session()->flash('error', 'Some Problem Occure');
            return redirect(route('admin.product.update'));
        }
    }
}
