<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'capacity' => 'required|integer|min:1'
        ]);

        Event::create([
            'name' => $request->name,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('events.index')->with('success','Event created successfully');

    }
}
