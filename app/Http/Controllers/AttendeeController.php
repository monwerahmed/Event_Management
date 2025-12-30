<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;
use App\Models\CheckIn;

class AttendeeController extends Controller
{
    public function create( $id){

    $event = Event::findOrFail($id);
   

    return view('attendees.create',compact('event'));
    }

    public function store(Request $request,$id){    

        $request->validate([
            'name' => 'required',
            'email' =>'required|email'
        ]);

         $attendee_mail=$request->email;
         $exists = Attendee::where('email',$attendee_mail)->where('event_id', $id)->exists();
         if($exists)  return back()->with('error','This attendee already exist');

        $attendee = Attendee::create([
            'name' => $request->name,
            'email' => $request->email,
            'event_id'=>$id,
        ]);

        return redirect()->route('events.index')->with('success','Attendee Added');

    }

}
