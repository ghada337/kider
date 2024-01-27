<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classrooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
    <div class="container">
    <h2>Classrooms Table</h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Time</th>
            <th>Capacity</th>
            <th>Cost</th>
            <th>Teacher</th>
            <th>Image</th>
            <th>published</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->age }}</td>
                <td>{{ $classroom->time }}</td>
                <td>{{ $classroom->capacity }}</td>
                <td>{{ $classroom->cost }}</td>
                <td>{{ $classroom->teacher->name }}</td>
                <td><img src="{{ asset('assets/images/'.$classroom->image) }}" alt="" style="height:50px"></td>
                <td>{{ $classroom->published? "Yes" : "No" }}</td>
                <td><a href="{{ route('showClassroom', ['id'=>$classroom->id]) }}">Show</a></td>
                <td><a href="{{ route('editClassroom', ['id'=>$classroom->id]) }}">Edit</a></td>
                <td><a href="{{ route('deleteClassroom', ['id'=>$classroom->id]) }}" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
