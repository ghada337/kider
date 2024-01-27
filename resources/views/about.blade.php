@extends('layouts.pages')

@section('title')
    Kider - About
    {{--Kider - Preschool Website Template--}}
@endsection

@section('pageName')
    About Us
@endsection

@section('content')
    <!-- Page Header start -->
    @include('includes.pageHeader')
    <!-- Page Header End -->

    <!-- About Start -->
    @include('includes.about')
    <!-- About End -->


    <!-- Call To Action Start -->
    @include('includes.callToAction')
    <!-- Call To Action End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Popular Teachers</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                    eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                @include('includes.team')
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection



        


        