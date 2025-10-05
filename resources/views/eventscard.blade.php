@extends('mainlayout')

@section('styles')
<link rel="stylesheet" href="css/eventcards.css">
@endsection

@section('header')

@section('content')

<div class="headline-events container">
    <h1>Upcoming Events</h1>
    <p>Discover professional development opportunities, networking events, and industry conferences</p>
    <div class="search-area container">
        <form action="{{ route('eventscard.search') }}" method="GET" class="mb-4">
            <div class="row g-2">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search by title..."
                        value="{{ request('search') }}">
                </div>

                <div class="col-md-2">
                    <select name="category" class="form-select">
                        <option value="">All Categories</option>
                        <option value="Workshop" {{ request('category')=='Workshop' ? 'selected' : '' }}>Workshop
                        </option>
                        <option value="Seminar" {{ request('category')=='Seminar' ? 'selected' : '' }}>Seminar</option>
                        <option value="Conference" {{ request('category')=='Conference' ? 'selected' : '' }}>Conference
                        </option>
                    </select>
                </div>

                <div class="col-md-3">
                    <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                </div>

                <div class="col-md-1">
                    <input type="number" name="min_price" class="form-control" placeholder="Min price"
                        value="{{ request('min_price') }}">
                </div>
                <div class="col-md-1">
                    <input type="number" name="max_price" class="form-control" placeholder="Max price"
                        value="{{ request('max_price') }}">
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr style="width: 80%; margin-left: 150px;">
<div class="event-container container">
    @if($events->count() > 0)
    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4">
            <div class="card">
                @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="Event Image">
                @endif
                <div class="card-body">
                    <h5 class="title card-title">{{ $event->title }}</h5>
                    <p class="description card-text">{{ $event->description }}</p>
                    <p class="category card-texta"><strong>Category:</strong>{{ $event->category}}</p>
                    <p class="date card-text"><strong>Date:</strong> {{ $event->date }}</p>
                    <p class="time card-text"><strong>Time:</strong> {{ $event->time }}</p>
                    <p class="location card-text"><strong>Location:</strong> {{ $event->location }}</p>
                    <div class="card-img-overlay">
                        <span class="price-tag"> ${{ number_format($event->price, 2) }}</span>
                    </div>
                    <div class="register-buttons">
                        {{-- <form action="{{ route('events.', $event->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="view-details-button">Details</button>
                        </form> --}}
                        <form action="{{ route('events.toggle', $event->id) }}" method="POST">
                            @csrf
                            @if ($event->users->contains('id', auth()->id()))
                            <button type="submit" class="view-participate-button">Cancel</button>
                            @else
                            <button type="submit" class="view-participate-button">Participate</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @else 
    <p>No events are available, stay tuned for upcoming events!!!</p> {{-- This line is for no events are created or foreachloop is empty --}}
    @endif
</div>

@endsection