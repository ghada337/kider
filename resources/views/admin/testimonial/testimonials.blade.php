<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
    <div class="container">
    <h2>Testimonials Table</h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Name</th>
            <th>Profession</th>
            <th>Image</th>
            <th>published</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->profession }}</td>
                <td><img src="{{ asset('assets/images/'.$testimonial->image) }}" alt="" style="height:50px"></td>
                <td>{{ $testimonial->published? "Yes" : "No" }}</td>
                <td><a href="{{ route('showTestimonial', ['id'=>$testimonial->id]) }}">Show</a></td>
                <td><a href="{{ route('editTestimonial', ['id'=>$testimonial->id]) }}">Edit</a></td>
                <td><a href="{{ route('deleteTestimonial', ['id'=>$testimonial->id]) }}" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
