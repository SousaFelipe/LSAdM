<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @section('title', Auth::user()->firstAndLastName())


    @section('head-styles')

        <link rel="stylesheet" href="{{ asset('css/layouts/admin.css') }}">

        @yield('layout-styles')

    @endsection


    @include('includes.head')


    <body class="text-center">

        <main class="flex-row h-100">

            <div class="sidebar">

                <div class="brand">
                    <img src="{{ asset('assets/images/brand/neptune.png') }}" alt="Light Spark" width="40" height="40">
                    <span class="user-info">
                        <div class="user-text">
                            <span class="text-secondary fs-sm fw-6 ff-poppins">{{ Auth::user()->firstName() }}</span>
                            <span class="text-tertiary fs-xs fw-5 ff-poppins">Online</span>
                        </div>
                        <div class="avatar">
                            <img src="{{ Auth::user()->avatar() }}" alt="{{ Auth::user()->firstName() }}" width="38" height="38">
                        </div>
                    </span>
                </div>

                <nav class="mt-4">
                    <span class="sidebar-menu">MENU</span>
                    <ul>
                        <li class="nav-item @yield('dashboard')" data-nav-item="dashboard">
                            <a href="{{ route('admin.dashboard.page') }}">
                                <i class="material-icons-two-tone">dashboard</i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item @yield('provedores')" data-nav-item="provedores">
                            <a href="{{ route('admin.provedores.page') }}">
                                <i class="material-icons-two-tone">public</i> Provedores
                            </a>
                        </li>
                        <li class="nav-item @yield('tokens')" data-nav-item="tokens">
                            <a href="{{ route('admin.tokens.page') }}">
                                <i class="material-icons-two-tone">token</i> Tokens
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

            <div id="app" class="flex-row grow-1 relative">

                <header class="header-menu-content">
                    <header class="header-menu">
                         <div class="navbar-menu">
                            <ul>
                                <li class="nav-menu-item">
                                    <i class="material-icons">first_page</i>
                                </li>
                            </ul>
                        </div>
                    </header>
                </header>

                <div class="main-container">

                    <div class="frame-top">
                        @yield('frame-top')
                    </div>

                    <div class="main-content">
                        @yield('content')
                    </div>
                </div>

            </div>

            @yield('modal-container')

        </main>

        <form id="formSignOut" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')
        @yield('layout-scripts')

    </body>

</html>
