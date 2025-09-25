<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Event Participants</h2>

@foreach($participants as $user)
            <strong>Event:</strong> {{ $event->title }}

            @if($event->users->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Event Title</th>
                            <th>Participate at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($event->users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->created_at->format('Y F d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No participants yet.</p>
            @endif
@endforeach

</body>
</html>

