<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Edit Event</h2>

    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Event title</label>
        <input type="text" name="title" value="{{ $event->title }}" required>

        <label for="title">Category</label>
        <input type="text" name="category" value="{{ $event->category }}" required>

        <label for="date">Date</label>
        <input type="date" name="date" value="{{ $event->date }}" required>

        <label for="time">Time</label>
        <input type="time" name="time" value="{{ $event->time }}" required>

        <label for="location">Location</label>
        <input type="text" name="location" value="{{ $event->location }}" required>

        <label for="image">Image</label>
        <input type="file" name="image">

        <label for="description">Description</label>
        <textarea name="description" required>{{ $event->description }}</textarea>

        <label for="price">Price (npr)</label>
        <input type="number" name="price" value="{{ $event->price }}" required>

        <button type="submit">Update Event</button>
    </form>
</div>
</body>
</html>