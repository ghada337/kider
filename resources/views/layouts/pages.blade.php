<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('includes.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->
        <!-- Back to Top -->
        @include('includes.backToTop')

    </div>

    <!-- JavaScript Libraries -->
    @include('includes.javascriptLibraries')
    <!-- Template Javascript -->
    @include('includes.templateJavascript')

    <!-- sweet alert -->
    @include('sweetalert::alert')

</body>

</html>