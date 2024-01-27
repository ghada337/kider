<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Classroom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Classroom</h2>
        <form action="{{route ('storeClassroom')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="{{ old('age') }}">
                @error('age')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="text" class="form-control" id="time" placeholder="Enter time" name="time" value="{{ old('time') }}">
                @error('time')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" value="{{ old('capacity') }}">
                @error('capacity')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="cost">Cost:</label>
                <input type="number" step="0.01" min="0" class="form-control" id="cost" placeholder="Enter cost" name="cost" value="{{ old('cost') }}">
                @error('cost')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher:</label>
                <div class="form-group">
                    <select name="teacher_id">
                        <option value="">Choose a teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @selected(old('teacher_id') == $teacher->id)>{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('teacher_id')
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