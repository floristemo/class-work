<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function contacts (){
        return view('contacts');
    }

    public function blog (){
        return view('blog');
    }

    public function portfolio (){
        return view('portfolio');
    }

    public function price (){
        return view('price');
    }
}
