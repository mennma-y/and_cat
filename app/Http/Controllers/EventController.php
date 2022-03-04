<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        $events=Event::orderBy('created_at','desc')->get();
        $user=Auth::user();
        
        return view('event.event', ['events'=>$events, 'user'=>$user]);
    }

    public function show($id)
    {   
        
        $events=Event::orderBy('created_at','desc')->get();
        $event = Event::find($id);   
        

        return view('event.event_detail')->with(['event'=>$event])->with(['events'=>$events]); 
    }  

    public function create()
    {
        $user=Auth::user();
        
        return view('event.create_event', ['user' => $user]);
    }

    public function store(Request $request)
    {   

        $event = new Event();
        $event->organize = $request->organize;
        $event->category = $request->category;
        $event->place = $request->place;
        $event->event_date = $request->event_date;
        $event->address = $request->address;
        $event->parttime = $request->parttime;
        $event->detail = $request->detail;
        
        $event->save();

        return redirect()->route('event.index');

    }

    public function edit($id)
    {
        $user = Auth::user();
        $event =Event::find($id);

        return view('event.event_edit',['user'=>$user,'event'=>$event]);  

    }

    public function update(Request $request ,$id, Event $event)
    {
        $event =Event::find($id);
        $event->organize = $request->organize;
        $event->category = $request->category;
        $event->place = $request->place;
        $event->event_date = $request->event_date;
        $event->address = $request->address;
        $event->parttime = $request->parttime;
        $event->detail = $request->detail;
        $event->save();

        return redirect()->route('event.index',['id'=>$event->id]);
    }

    public function delete($id , Event $event)
    {
        $event =Event::find($id);

        $event->delete();

        return redirect()->route('event.index',['id'=>$event->id]);
    }

}
