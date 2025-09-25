<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $events = Event::latest()->get();
        return view('dashboard', compact('events'));
    }

    public function dashboard() {
        $events = Event::with('users')->latest()->get();
        return view('dashboard', compact('events'));
    }

    public function showParticipants(Event $event) {

        $participants = $event->users;
        // $events = Event::with('users')->latest()->get();
        return view('participants', compact('event', 'participants'));
    }
}
