<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Method to define validation rules
    protected function validateData(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'package' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
        ]);
    }

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

    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'),[
            'title' => 'Product',
        ]);
    }

    public function save(Request $request)
    {
        $validatedData = $this->validateData($request);

        $products = Product::create($validatedData);

        if ($products) {
            return redirect(route('admin.product.home'))->with('success', 'Product added successfully.');
        } else {
<<<<<<< HEAD
            return redirect(route('admin.product.create'))->with('error', 'Failed to add product.');
=======
            session()->flash('error', 'Some Problem Occur');
            return redirect(route('admin.product.create'));
>>>>>>> 8da9c80b205d704313d638eeded8d19413d9b150
        }
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();

        return view('admin.product.update', compact('categories', 'products'), [
            'title' => 'Product',
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validateData($request);

        $products = Product::findOrFail($id);

        $products->title = $validatedData['title'];
        $products->category_id = $validatedData['category_id'];
        $products->package = $validatedData['package'];
        $products->price = $validatedData['price'];

        $saved = $products->save();

        if ($saved) {
            return redirect(route('admin.product.home'))->with('success', 'Product updated successfully.');
        } else {
<<<<<<< HEAD
            return redirect(route('admin.product.update', $id))->with('error', 'Failed to update product.');
=======
            session()->flash('error', 'Some Problem Occur');
            return redirect(route('admin.product.home'));
>>>>>>> 8da9c80b205d704313d638eeded8d19413d9b150
        }
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id);
        $deleted = $products->delete();

        if ($deleted) {
            return redirect(route('admin.product.home'))->with('success', 'Product deleted successfully.');
        } else {
<<<<<<< HEAD
            return redirect(route('admin.product.home'))->with('error', 'Failed to delete product.');
=======
            session()->flash('error', 'Some Problem Occur');
            return redirect(route('admin.product.update'));
>>>>>>> 8da9c80b205d704313d638eeded8d19413d9b150
        }
    }
}
