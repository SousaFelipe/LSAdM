<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @section('title', Auth::user()->firstAndLastName())


    @section('head-styles')
        <link rel="stylesheet" href="{{ asset('css/layouts/admin.css') }}">
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
                        <li class="nav-item active" data-nav-item="dashboard">
                            <i class="material-icons-two-tone">dashboard</i>
                            Dashboard
                        </li>
                        <li class="nav-item" data-nav-item="provedores">
                            <i class="material-icons-two-tone">public</i>
                            Provedores
                        </li>
                        <li class="nav-item" data-nav-item="tokens">
                            <i class="material-icons-two-tone">token</i>
                            Tokens
                        </li>
                    </ul>
                </nav>

            </div>

            <div class="flex-row grow-1 relative">

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

                <iframe id="main" src="{{ route('admin.dashboard.page') }}" width="100%" height="100%"></iframe>

            </div>

        </main>

        <form id="formSignOut" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

        @include('includes.scripts')

        <script src="{{ asset('js/app/layouts/admin.js') }}"></script>

    </body>

</html>
