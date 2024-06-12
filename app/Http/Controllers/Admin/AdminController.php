<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            "title" => "Dashboard",
        ]);
    }

    public function user(Request $request)
    {
        if ($request->has('search')) {
            $users = User::search($request->search)->orderBy('id')->get();
        } else {
            $users = Auth::user();
            $users = User::orderBy('id')->get();
        }
        return view('admin.user.home', compact('users'), [
            "title" => "User",
        ]);
    }
}
