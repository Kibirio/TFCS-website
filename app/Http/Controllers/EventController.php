<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // dd($user->events[0]->images);
        return view('dashboard.uploadedEvents')->with('events', $user->events);

        // $events = Event::latest()->paginate(4);
        // return view('dashboard.uploadedEvents', compact('events'));
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
            'images' => 'nullable',
            // 'images' => 'mimes:png, jpeg'
        ]);

        if($request->hasfile('images')) {
           foreach($request->file('images') as $file){
               $name = time().'.'.$file->extension();
               $file->move(public_path().'/storage/cover_images/', $name);  
               $images = $name;  
           }
        }else{
            $images = 'noimage.jpg';
        }
        $event = new Event;
        $event -> title = $request->input('title');
        $event -> description = $request->input('description');
        $event->event_date = $request->input('event_date');
        // $event->images = json_encode($images);
        $event->images = $images;
        $event->location = $request->input('location');
        $event->tag = $request->input('tag');
        $event->user_id = auth()->user()->id;
        // dd($event);
        $event->save();

        return redirect('/admin')->with('success', 'Event Created Successfully');
    }

    // display the specified event
    public function show(Event $event)
    {
        return view('dashboard.showEvents', compact('event'));
    }

    public function edit(Event $event)
    {
        if(auth()->user()->id !== $event->user_id)
        {
            return redirect('/admin')->with('error', 'Unauthorized Page');
        }
        // dd($event->images];
        return view('dashboard.editEvent', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'event_date' => 'required',
            'location' => 'required',
            'tag' => 'nullable',
        ]);
        
        //handle file upload
        if($request->hasfile('images')) {
            foreach($request->file('images') as $file){
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/storage/', $name);  
                $images[] = $name;  
            }
         }else{
            $mages[] = 'noimage.jpg';
        }

        $event = Event::find($id);
        $event -> title = $request->input('title');
        $event -> description = $request->input('description');
        $event->event_date = $request->input('event_date');
        $event->location = $request->input('location');
        $event->tag = $request->input('tag');
        $event->user_id = auth()->user()->id;
        if($request->hasFile('images'))
        {
            $event->images = json_encode($images);
        }
        $event->save();

        return redirect('/admin')->with('success', 'event Updated Successfully!');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if(auth()->user()->id !== $event->user_id)
        {
            return redirect('/posts')->with('error', 'Anauthorized Page');
        }
        if($event->images != 'noimage.jpg')
        {
            // delete image
            Storage::delete('public/cover_images/'.$event->images);
        }
        $event->delete();
        return back()->with('success', 'Event Removed Successfully');
    }
}

