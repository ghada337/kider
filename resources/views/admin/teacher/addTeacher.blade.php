<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Teacher</h2>
        <form action="{{route ('storeTeacher')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="date" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="{{ old('designation') }}">
                @error('designation')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="facebook">Facebook Link:</label>
                <input type="email" class="form-control" id="facebook" placeholder="Enter facebook link" name="facebook" value="{{ old('facebook') }}">
                @error('facebook')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="twitter">Twitter Link:</label>
                <input type="email" class="form-control" id="twitter" placeholder="Enter twitter link" name="twitter" value="{{ old('twitter') }}">
                @error('twitter')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="instgram">Instgram Link:</label>
                <input type="email" class="form-control" id="instgram" placeholder="Enter instgram link" name="instgram" value="{{ old('instgram') }}">
                @error('instgram')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="published" @checked(old('published'))> Published</label>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Insert</button>
        </form>
    </div>
</body>
</html>