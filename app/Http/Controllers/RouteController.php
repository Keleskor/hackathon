<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function indexLogin()
    {
        return view("indexLogin");
    }
    public function index()
    {
        return view("index");
    }

    public function survey(){
        return view("survey");
    }

    public function contact(){
        return view("contacts");
    }
    public function student(){
        return view("interests");
    }
}
