<?php
//create default table check_ins
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
   use HasFactory;
    protected $fillable = [
       'event_id',
       'attendee_mail',
       'check_in',
    ];

  

    public function event(){
        // $eventId= $this->event_id;
        // $event= Event::find($eventId);
        // return $event;
        return $this->belongsTo(Event::class);
    }
    
    public function attendee(){
        // $attendeeId = $this->attendee_id;
        // $attendee = Attendee::find($attendeeId);
        // return $attendee;
        //return Attendee::where('id',$attendeeId)->first();
        return $this->belongsTo(Attendee::class);
    }
    // public static function boot()
    // {
    //     parent::boot();
    //    // dd("CheckIn Model vv Loaded");
    // }
    
}
