<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return view("page/index");
    }
    function rooms(){
        return view("page/rooms");
    }
    function facilities(){
        return view("page/facilities");
    }
}
