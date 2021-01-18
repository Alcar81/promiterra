<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Head -->
    @include('partials.head.head')
<!-- end: Head -->

<body>

    <!-- Wrapper -->
    <div id="wrapper1">

        <!-- Header -->
            @include('partials.header.header')
        <!-- end: Header -->

        <!-- summernote header -->
                @include('partials.summernote.summernoteHeader')
        <!-- end: summernote header -->


        <!-- HISTORY -->
        <main>
            @yield('content')
        </main>
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

    <!-- summernote footer -->
                @include('partials.summernote.summernoteFooter')
    <!-- end: summernote footer -->

</body>

</html>
