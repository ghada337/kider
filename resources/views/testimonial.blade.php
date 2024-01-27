@extends('layouts.pages')

@section('title')
    Kider - Testimonial
    {{--Kider - Preschool Website Template--}}
@endsection

@section('pageName')
    Testimonial
@endsection

@section('content')
    <!-- Page Header start -->
    @include('includes.pageHeader')
    <!-- Page Header End -->

    <!-- Testimonial Start -->
    @include('includes.testimonial')
    <!-- Testimonial End -->
@endsection