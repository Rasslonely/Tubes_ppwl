<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\post;

class PostingController extends Controller
{
    // public function utama(){
    //     $posts = post::all();
    //     return view('website.index', compact('posts'));
    // }
    // public function index(){
    //     $posts = post::latest('update_at')->get();
    //     return view('backend.index', [
    //         "title" => "Backend",
    //     ]);
    // }
}
