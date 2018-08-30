<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        return view('home');
        //return "主页";
    }

    public function help(){
        return view('help');
        //return "帮助页";
    }

    public function about(){
        return view('about');
        //return "关于";
    }
}
