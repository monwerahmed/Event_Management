<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;
use App\Models\CheckIn;

class CheckInController extends Controller
{
    public function checkIn(Request $request, $id){
       
        $request->validate([
            'attendee_mail'=>'required|email'
        ]);
          
        $event = Event::Find($id);
        $attendee_mail = $request->attendee_mail;
        $exists = CheckIn::where('event_id',$id)->where('attendee_mail',$attendee_mail)->exists();
        
        if($exists){
            return back()->with('error','This attendee already checked in');
        }
        $find=Attendee::where('event_id',$id)->where('email',$attendee_mail)->exists();

        if(!$find) return back()->with('error','This candidate is not registered');
        $currentCount = CheckIn::where('event_id', $id)->count();
        
        if($currentCount >= $event->capacity){
            return back()->with('error','Event capacity full');
        }
        
       
        CheckIn::create([
            'event_id' => $id,
            'attendee_mail' => $attendee_mail,
            'check_in' => true,

        ]);
     
        //dd('Controllerr Checked');
        return back()->with('success','Check-in successfull');
                          
    }
}
