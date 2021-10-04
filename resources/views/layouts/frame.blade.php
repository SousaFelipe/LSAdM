<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @section('title', Auth::user()->firstAndLastName())


    @section('frame-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/frame.css') }}">
    @endsection


    @include('includes.head')


    <body class="text-center">

        <div class="main-container">

            <div class="frame-top">
                @yield('frame-top')
            </div>

            <div class="main-content">
                @yield('content')
            </div>
        </div>

        @include('includes.scripts')

        @yield('frame-scripts')

        <script src="{{ asset('js/app/layouts/frame.js') }}"></script>

    </body>

</html>
