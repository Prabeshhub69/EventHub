<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //show event creation form(for admin only)
    public function create() {
        return view('create-event');
    }
    
    // requirement for event creation(store new event)
    public function store (Request $request) {
        $request->validate ([
            'title' => 'required|string|max:100',
            'category' => 'required',
            'date'=>'required|date',
            'location'=>'required|string|max:100', 
            'time'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'required|string',
            'price'=>'required|numeric|min:0',
        ]);

        $imagePath = null;
        if ($request->hasfile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }

        //Push the Data inside event table
        Event::create([
            'title' => $request->title,
            'category' => $request->category,
            'date' => $request->date,
            'location' => $request->location,
            'time' => $request->time,
            'image' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Event has been created successfully!');
    }

    //show events for user at HomePage
    public function index() {
        $events = Event::latest()->get();
        return view('home', compact('events'));
    }

    public function myevents() {

        $user = auth()->user();
        $events = $user->events()->latest()->get();

        return view ('myevents', compact('events'));

    }

    //to edit event
    public function edit(Event $event) {
        return view ('edit-event', compact('event'));
    }

    public function update(Request $request, Event $event) {

        $request->validate([
            'title' => 'required|string|max:100',
            'category' => 'required',
            'date'=>'required|date',
            'location'=>'required|string|max:100', 
            'time'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'required|string',
            'price'=>'required|numeric|min:0',
        ]);

        $imagePath = $event->image; //keep old image
        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }

        $event->update([
            'title' => $request->title,
            'category' => $request->category,
            'date' => $request->date,
            'location' => $request->date,
            'time' => $request->time,
            'image' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('dashboard')->with('success', 'event has been updated successfully!');
    }

    public function destroy(Event $event) {
        $event->users()->detach();
        $event->delete();
        return redirect('dashboard')->with('success', 'Event has been deleted Successfully');
    }

    //Function for participation

     public function toggleParticipation(Event $event) {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must login first to participate.');
        }

        $user = auth()->user();

        if ($event->users()->wherePivot('user_id', $user->id)->exists()) {
            $event->users()->detach($user->id);
            return back()->with('success', 'You have successfully cancelled your participation');
        } else {
            $event->users()->attach($user->id);
            return back()->with('success', 'Successfully joined the event');
        }
    }

    //function for Event Search
    public function search(Request $request) {

        $query = Event::query();

        //search by title
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        //search by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        //search by date
        if ($request->filled('date')) {
            $query->where('date', $request->date);
        }

        //filter by minimum and maximum price
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $events = $query->latest()->get();

        return view('eventscard', compact('events'));

    }

}

