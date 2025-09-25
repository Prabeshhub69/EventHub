<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <header class="dashboard-header"></header>
    <div class="container">
        @if(session('success'))
        <p style="color:green"> {{ session('success') }}</p>
        @endif
        <div class="analysis col-md-9">
            <div class="analysis-header">
                <div class="part1">
                    <h2>Admin Dashboard</h2>
                    <p>Manage events, participants, and analytics</p>
                </div>

                <div class="part2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger logout-btn">Logout</button>
                    </form>
                    <form action="{{ route('home') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success logout-btn">Home</button>
                    </form>
                </div>
            </div>
            <div class="event-lists">
                @if ($events->count() > 0)
                @foreach($events as $event)
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            @if( $event->image)
                            <img class="img-fluid" src="{{ asset('storage/'. $event->image) }}">
                            @endif
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title">{{$event->title }}</h5>
                                <p class="card-text">{{$event->description }}</p>
                                <p class="card-text"><strong>Category:</strong> {{$event->category }}</p>
                                <p class="card-text"><strong>Date:</strong> {{ $event->date }}</p>
                                <p class="card-text"><strong>Time:</strong> {{$event->time }}</p>
                                <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                                <p class="card-text"><strong>Price:</strong> ${{$event->price }}</p>
                                <div class="dashboard-button">
                                    <form action="{{ route('participants', ['event' => $event->id]) }}" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-dark">View Participants</button>
                                    </form>
                                    <form action="{{ route('events.edit', ['event' => $event->id]) }}" method="GET">
                                        @csrf
                                        <button class="btn btn-warning">Edit</button>
                                    </form>
                                    <form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>No events created</p>
                @endif
            </div>
        </div>

        <div class="create-event col-md-3">
            <h4>Create New Event</h4>
            <p>Add a new event to the platform</p>
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <label for="title">Event title</label>
                <input type="text" name="title" placeholder="Enter event title" required>

                <label for="date">Date</label>
                <input type="date" name="date" required>

                <label for="time">Time</label>
                <input type="time" name="time" required>

                <label for="location">location</label>
                <input type="text" name="location" placeholder="Enter location" required>

                <label for="image">Image</label>
                <input type="file" name="image">

                <label for="description">Description</label>
                <textarea name="description" placeholder="Enter description" required></textarea>

                <label for="price">Price (npr)</label>
                <input type="number" name="price" min="0" step="0.01" placeholder="0" required>

                <label for="category">Category</label>
                <select name="category" class="form-select">
                    <option value="">All Categories</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Seminar">Conferences/Seminar</option>
                    <option value="festival">Festivals / Fairs</option>
                    <option value="concerts">Concerts / Music Shows</option>
                    <option value="art">Art Exhibitions</option>
                    <option value="sports">Sports Tournaments</option>
                    <option value="parties">Parties</option>
                </select>

                <button type="submit">Create Event</button>
            </form>
        </div>


    </div>
    </div>
</body>

</html>