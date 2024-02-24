<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class AdminController extends Controller
{
    public function postPage()
    {
        return view('admin.postPage');
    }
    public function addPost(Request $request)
    {
        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->image = $request->image;
        $post->save();
        return redirect()->back();
    }
}
