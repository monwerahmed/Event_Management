<!DOCTYPE html>
<html>
<head>
    <title>Events List</title>
</head>
<body>

<h1>All Events</h1>

<!-- Show success or error messages -->
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<!-- Create new event button -->
<a href="{{ route('events.create') }}">Create New Event</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Capacity</th>
        <th>Checked In</th>
        <th>Remaining</th>
        <th>Actions</th>
    </tr>

    @foreach ($events as $event)
    <tr>
        <td>{{ $event->name }}</td>
        <td>{{ $event->capacity }}</td>
        <td>{{ $event->checkedInCount() }}</td>
        <td>{{ $event->remainingSpots() }}</td>

        <td>
            <!-- Add attendee -->
            <a href="{{ route('attendees.create', $event->id) }}">Add Attendee</a>

            <!-- Check-in form -->
            <form method="POST" action="{{ route('checkin.store', $event->id) }}">
                @csrf
                <input type="email" name="attendee_mail" placeholder="Enter Attendee Mail" required>
                <button type="submit">Check In</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
