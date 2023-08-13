<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aController extends Controller
{
    public function b(){
        return view('b');
    }

    public function about(){
        return view('about');
    }

    public function game(){
        return view('game');
    }

    public function contact(){
        return view('contact');
    }

    public function tranner(){
        return view('tranner');
    }

}
