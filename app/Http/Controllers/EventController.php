<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::latest()->paginate(10);
        return view('events', compact('events'));
    }
    
    public function create(){
        return view('dashboard.createEvent');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'event_date' => 'required',
            'location' => 'required',
            'tag' => 'nullable',
            'images' => 'required',
            // 'images' => 'mimes:png, jpeg'
        ]);

        if($request->hasfile('images')) {
           foreach($request->file('images') as $file){
               $name = time().'.'.$file->extension();
               $file->move(public_path().'/files/', $name);  
               $images[] = $name;  
           }
        }
        $event = new Event;
        $event -> title = $request->input('title');
        $event -> description = $request->input('description');
        $event->event_date = $request->input('event_date');
        $event->images = json_encode($images);
        $event->location = $request->input('location');
        $event->tag = $request->input('tag');
        $event->user_id = auth()->user()->id;
        // dd($event);
        $event->save();

        return back()->with('success', 'Event Created Successfully');
    }

    // display the specified event
    public function show(Event $event)
    {
        return view('events', compact('event'));
    }
}
