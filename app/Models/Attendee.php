<?php
//create default tabe attendees
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable=[
        'name',
        'email',
        'event_id',
    ];

    public function checkIns(){
        return $this->hasMany(CheckIn::class);
    }
}
