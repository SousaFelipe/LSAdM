<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('title', 'Login')

    @include('includes.head')

    <body>

        <div class="flex-col centered w-100 h-100">
            @yield('content')
        </div>


        @include('includes.scripts')


        @yield('layout-scripts')

    </body>
</html>
