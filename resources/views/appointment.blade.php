@extends('layouts.pages')

@section('title')
    Kider - Appointment
    {{--Kider - Preschool Website Template--}}
@endsection

@section('pageName')
    Appointment
@endsection

@section('content')
    <!-- Page Header start -->
    @include('includes.pageHeader')
    <!-- Page Header End -->

    <!-- Appointment Start -->
    @include('includes.appointment')
    <!-- Appointment End -->
@endsection
