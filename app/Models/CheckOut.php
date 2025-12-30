<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $fillable = ['event_id', 'attendee_mail', 'check_out'];
}
