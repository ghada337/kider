<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
    <div class="container">
    <h2>Appointments Table</h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Gurdian Name</th>
            <th>Gurdian Email</th>
            <th>Child Name</th>
            <th>Child Age</th>
            <th>Message</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->guardianName }}</td>
                <td>{{ $appointment->guardianEmail }}</td>
                <td>{{ $appointment->childName }}</td>
                <td>{{ $appointment->childAge }}</td>
                <td>{{ Str::limit($appointment->message, 20) }}</td>



                <td><a href="{{ route('showAppointment', ['id'=>$appointment->id]) }}">Show</a></td>
                <td><a href="{{ route('deleteAppointment', ['id'=>$appointment->id]) }}" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
