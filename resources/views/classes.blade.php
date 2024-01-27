@extends('layouts.pages')

@section('title')
    Kider - Classes
    {{--Kider - Preschool Website Template--}}
@endsection

@section('pageName')
    Classes
@endsection

@section('content')
    <!-- Page Header start -->
    @include('includes.pageHeader')
    <!-- Page Header End -->

    <!-- Classes Start -->
    @include('includes.classes')
    <!-- Classes End -->


    <!-- Appointment Start -->
    @include('includes.appointment')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    @include('includes.testimonial')
    <!-- Testimonial End -->
@endsection


        
