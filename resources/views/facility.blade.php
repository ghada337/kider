@extends('layouts.pages')

@section('title')
    Kider - Facilities
    {{--Kider - Preschool Website Template--}}
@endsection

@section('pageName')
    Facilities
@endsection

@section('content')
    <!-- Page Header start -->
    @include('includes.pageHeader')
    <!-- Page Header End -->


    <!-- Facilities Start -->
    @include('includes.facilities')
    <!-- Facilities End -->
@endsection