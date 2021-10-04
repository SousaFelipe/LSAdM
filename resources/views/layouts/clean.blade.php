<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @section('title', 'Login')


    @include('includes.head')


    <body>

        <div id="content" class="flex-col align-center w-100 h-100">
            @yield('content')
        </div>


        @include('includes.scripts')


        @yield('layout-scripts')

    </body>
</html>
