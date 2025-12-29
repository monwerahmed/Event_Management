<!DOCTYPE html>
<html>
<head>
    <title>Add Attendee</title>
</head>
<body>

<h1>Add Attendee for Event: {{ $event->name }}</h1>

<form method="POST" action="{{ route('attendees.store', $event->id) }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <button type="submit">Add Attendee</button>
</form>

</body>
</html>
