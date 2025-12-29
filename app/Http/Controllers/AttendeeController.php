<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;


class AttendeeController extends Controller
{
    public function create($id){

    $event = Event::findOrFail($id);

    return view('attendees.create',compact('event'));
    }

    public function store(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' =>'required|email'
        ]);

        $attendee = Attendee::create([
            'name' => $request->name,
            'email' => $request->email,
            'event_id'=>$id,
        ]);

        return redirect()->route('events.index')->with('success','Attendee Added');

    }

}
