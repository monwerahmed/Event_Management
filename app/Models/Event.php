<?php
//create default table events
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'name',
        'capacity',
    ];

    public function checkIns(){
        return $this->hasMany(CheckIn::class);//a function may have many check-in
    }

    public function checkedInCount(){
         // return CheckIn::where('event_id', $this->id)->count();//SELECT * FROM check_ins WHERE event_id = $this->id;

        return $this->checkIns()->count();//calls the checkIns() method on this specific Event instance.
    }

    public function remainingSpots(){
        $cap = $this->capacity;//this refers to current event obeject
        $in = $this->checkedInCount();
        return $cap-$in;

    }
}
