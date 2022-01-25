<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $name = "Yusuf Rizal";
        return view('home', compact('name'));
    }
}
