<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function availableEvents() {
        $events = Event::latest()->get();
        return view ('eventscard', compact('events'));
    }

    public function showaboutus() {
        return view ('aboutus');
    }
}
