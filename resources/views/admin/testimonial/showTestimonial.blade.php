<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container mt-3">
        <h2>{{ $testimonial->name }}</h2>
        <table class="table table-borderless">
            <tbody>
            <tr>
                <td>Profession</td>
                <td>{{ $testimonial->profession }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td style="word-break:break-all;">{{ $testimonial->description }}</td>
            </tr>
            @if($testimonial->deleted_at)
            <tr>
                <td>Deleted at</td>
                <td>{{ $testimonial->deleted_at }}</td>
            </tr>
            @endif
            <tr>
                <td>Created at</td>
                <td>{{ $testimonial->created_at }}</td>
            </tr>
            </tbody>
            <tr>
                <td>Updated at</td>
                <td>{{ $testimonial->updated_at }}</td>
            </tr>
            <tr>
                <td>Published</td>
                <td>{{ $testimonial->published? "Yes" : "No" }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ asset('assets/images/'.$testimonial->image) }}" alt="" style="height:200px"></td>
            </tr>
        </table>
    </div>
</body>
</html>
