<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
</head>
<body>

<h1>Create Event</h1>

<form method="POST" action="{{ route('events.store') }}">
    @csrf

    <label>Event Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Capacity:</label>
    <input type="number" name="capacity" required><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
