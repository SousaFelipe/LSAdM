<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @section('title', Auth::user()->firstAndLastName())


    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/admin.css') }}">
    @endsection


    @include('includes.head')


    <body class="text-center">

        <main class="flex-row centered">

            <span class="badge-md bg-green-one">Felipe</span>

        </main>

        <form id="formSignOut" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

    </body>

</html>
