@extends('mainlayout')
    @section('title', 'MyEvents')
    @section('header')

    
    @section('content')
        <div class="container">
        <h2>My Participated Events</h2>

        @forelse($events as $event)
            <div class="card mb-3 p-3">
                <h4>{{ $event->title }}</h4>
                <p><strong>Category:</strong>{{$event->category}}</p>
                <p><strong>Date:</strong> {{ $event->date }}</p>
                <p><strong>Location:</strong> {{ $event->location }}</p>
                <P><strong>Price:</strong> ${{ $event->price }}</P>
                <p><strong>Joined At:</strong> {{ $event->pivot->created_at->format('Y F d') }}</p>
            </div>
        @empty
            <p>You have not participated in any events yet.</p>
        @endforelse
    @endsection


