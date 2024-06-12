<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $categories = Category::search($request->search)->orderBy('id')->get();
        } else {
            $categories = Category::all();
            $categories = Category::orderBy('id')->get();
        }
        return view('admin.category.home', compact(['categories']), [
            "title" => "Category",
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.category.create', [
            'title' => 'Category',
        ]);
    }

    public function save(Request $request)
    {
        // Validasi input
        $validation = $request->validate([
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses unggahan file
        if ($request->hasFile('image')) {
            // Menyimpan file ke direktori "uploads" di "storage/app/public"
            $imagePath = $request->file('image')->store('uploads', 'public');
            // Menambahkan path gambar ke data yang divalidasi
            $validation['image'] = $imagePath;
        }

        // Menyimpan data ke database
        $data = Category::create($validation);

        if ($data) {
            session()->flash('success', 'Category Added Successfully');
            return redirect()->route('admin.category.home');
        } else {
            session()->flash('error', 'Some Problem Occurred');
            return redirect()->route('admin.category.create');
        }
    }

    public function delete($id)
    {
        $categories = Category::findOrFail($id)->delete();
        if ($categories) {
            session()->flash('success', 'Category Delete Successfully');
            return redirect(route('admin.category.home'));
        } else {
            session()->flash('error', 'Some Problem Occure');
            return redirect(route('admin.category.home'));
        }
    }
}
