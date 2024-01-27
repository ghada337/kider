@php ($time=["0.1s","0.3s","0.5s"])
@php ($counter=0)
@foreach($teachers as $teacher)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$time[$counter]}}">
        <div class="team-item position-relative">
            <img class="img-fluid rounded-circle w-75" src="{{ asset('assets/images/'.$teacher->image) }}" alt="">
            <div class="team-text">
                <h3>{{ $teacher->name }}</h3>
                <p>{{ $teacher->designation }}</p>
                <div class="d-flex align-items-center">
                    <a class="btn btn-square btn-primary mx-1" href="{{ $teacher->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary  mx-1" href="{{ $teacher->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary  mx-1" href="{{ $teacher->instgram }}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    @if($counter==2)
        @php($counter=0)
    @else
        @php($counter+=1)
    @endif
@endforeach