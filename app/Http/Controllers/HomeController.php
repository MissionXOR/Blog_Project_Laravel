<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $type = Auth::user()->type;
            if($type == "user")
            {
                return view('Home.hompage');
            }
            else if($type == 'admin')
            {
                return view('admin.adminHome');
            }
            else
            {
                return redirect()->back();
            }
        }
    }
    public function post()
    {
        return view('viewpost');
    }
    public function Home()
    {
        return view('Home.hompage');
    }
}
