<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container mt-3">
        <h2>{{ $teacher->name }}</h2>
        <table class="table table-borderless">
            <tbody>
            <tr>
                <td>Designation</td>
                <td>{{ $teacher->designation }}</td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td>{{ $teacher->facebook }}</td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>{{ $teacher->twitter }}</td>
            </tr>
            <tr>
                <td>Instgram</td>
                <td>{{ $teacher->instgram }}</td>
            </tr>
            @if($teacher->deleted_at)
            <tr>
                <td>Deleted at</td>
                <td>{{ $teacher->deleted_at }}</td>
            </tr>
            @endif
            <tr>
                <td>Created at</td>
                <td>{{ $teacher->created_at }}</td>
            </tr>
            </tbody>
            <tr>
                <td>Updated at</td>
                <td>{{ $teacher->updated_at }}</td>
            </tr>
            <tr>
                <td>Published</td>
                <td>{{ $teacher->published? "Yes" : "No" }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ asset('assets/images/'.$teacher->image) }}" alt="" style="height:200px"></td>
            </tr>
        </table>
    </div>
</body>
</html>
