<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Classroom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Edit Classroom</h2>
        <form action="{{ route('updateClassroom', ['id'=>$classroom->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $classroom->name }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="{{ $classroom->age }}">
                @error('age')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="text" class="form-control" id="time" placeholder="Enter time" name="time" value="{{ $classroom->time }}">
                @error('time')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" value="{{ $classroom->capacity }}">
                @error('capacity')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="cost">Cost:</label>
                <input type="number" class="form-control" id="cost" placeholder="Enter cost" name="cost" value="{{ $classroom->cost }}">
                @error('cost')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher:</label>
                <div class="form-group">
                    <select name="teacher_id">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @selected($classroom->teacher_id == $teacher->id)>{{ $teacher->name }}</option>
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
                <img src="{{asset('assets/images/'.$classroom->image)}}" alt="" style="height:300px">
                <input type="hidden" name="oldImageName" value="{{ $classroom->image }}">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="published" @checked($classroom->published)> Published</label>    
                </div>
            </div>
            <button type="submit" class="btn btn-default">Insert</button>
        </form>
        <h1></h1>
    </div>
</body>
</html>