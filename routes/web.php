<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\CheckInController;

Route::get('/',[EventController::class,'index'])->name('events.index');
Route::get('/events/create', [EventController::class,'create'])->name('events.create');
Route::post('/events/store',[EventController::class,'store'])->name('events.store');
Route::get('/events/{id}/attendees/create',[AttendeeController::class,'create'])->name('attendees.create');
Route::post('/events/{id}/attendees/store', [AttendeeController::class, 'store'])->name('attendees.store');
Route::post('/events/{id}/checkin', [CheckInController::class, 'checkIn'])->name('checkin.store');
