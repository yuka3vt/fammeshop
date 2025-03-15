<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function home()
    {
        return view('webpage.home', [
            "title" => "Home"
        ]);
    }
}
