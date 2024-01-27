<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">DashBoard</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('index') }}">Kider</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Testimonials
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
          <li><a href="{{ route('addTestimonial') }}">Add Testimonial</a></li>
          <li><a href="{{ route('trashedTestimonials') }}">Trashed Testimonials</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teachers
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('teachers') }}">Teachers</a></li>
          <li><a href="{{ route('addTeacher') }}">Add Teacher</a></li>
          <li><a href="{{ route('trashedTeachers') }}">Trashed Teachers</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Classrooms
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('classrooms') }}">Classrooms</a></li>
          <li><a href="{{ route('addClassroom') }}">Add Classroom</a></li>
          {{-- <li><a href="{{ route('trashedClassrooms') }}">Trashed Classrooms</a></li> --}}
        </ul>
      </li>
      <li><a href="{{ route('contacts') }}">Contact Us</a></li>
      <li><a href="{{ route('unreadContacts') }}">Unread Messages ({{ $unread }})</a></li>
      <li><a href="{{ route('appointments') }}">Appointments</a></li>
    </ul>
  </div>
</nav>