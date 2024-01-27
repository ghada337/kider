<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classroom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container mt-3">
        <h2>Teacher: {{ $classroom->name }}</h2>
        <table class="table table-borderless">
            <tbody>
            <tr>
                <td>Age</td>
                <td>{{ $classroom->age }}</td>
            </tr>
            <tr>
                <td>Time</td>
                <td>{{ $classroom->time }}</td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td>{{ $classroom->capacity }}</td>
            </tr>
            <tr>
                <td>Cost</td>
                <td>{{ $classroom->cost }}</td>
            </tr>
            <tr>
                <td>Created at</td>
                <td>{{ $classroom->created_at }}</td>
            </tr>
            </tbody>
            <tr>
                <td>Updated at</td>
                <td>{{ $classroom->updated_at }}</td>
            </tr>
            <tr>
                <td>Published</td>
                <td>{{ $classroom->published? "Yes" : "No" }}</td>
            </tr>
            <tr>
                <td>Teacher Name</td>
                <td>{{ $classroom->teacher->name }}</td>
            </tr>
            <tr>
                <td>Teacher Image</td>
                <td><img src="{{ asset('assets/images/'.$classroom->teacher->image) }}" alt="" style="height:200px"></td>
            </tr>
            <tr>
                <td>Classroom Image</td>
                <td><img src="{{ asset('assets/images/'.$classroom->image) }}" alt="" style="height:200px"></td>
            </tr>
        </table>
    </div>
</body>
</html>
