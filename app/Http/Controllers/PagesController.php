<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function events(){
        $events = Event::latest()->paginate(4);
        return view('events', compact('events'));
    }
}
