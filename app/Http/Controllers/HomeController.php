<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.userpage');
    }

    public function redirect()
    {
        $usertype = Auth::user()->user_type;

        if ($usertype == '1') {
            // redirect to admin home page
            return view('admin.home');
        } else {
            // redirect to user's home page
            return view('home.userpage');
        }
    }
}
