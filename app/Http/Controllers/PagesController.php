<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function events(){
        return view('events');
    }
}
