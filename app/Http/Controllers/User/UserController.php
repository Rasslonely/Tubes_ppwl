<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    public function index()
    {
        // Ngambil semua kategori
        $categories = Category::all();
        return view('home', compact(['categories']), [
            'title' => 'Home',
        ]);

        // Jika tidak ada kategori yang ditemukan
        if (empty($products)) {
            return view('order', [
                'category' => [],
            ]);
        }
    }
}
