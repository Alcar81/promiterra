<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Head -->
    @include('partials.head.head')
<!-- end: Head -->

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
            @include('partials.header.header')
        <!-- end: Header -->

        <!-- HISTORY -->
            @yield('contenu')
        <!-- end: HISTORY -->

        <!-- Footer -->
            @include('partials.footer.mainfooter')
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
        @include('partials.gototopbutton.gototopbutton')

    <!--Template functions-->
    @include('partials.templatefunctions.templatefunctions')

</body>

</html>

