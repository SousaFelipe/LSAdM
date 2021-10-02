@extends('layouts.clean')


@section('title', 'Login')


@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
@endsection


@section('content')

    <div class="progress">
        <div id="loginProgress" class="progress-status"></div>
    </div>

    <div class="alert-container">
        <div id="statusLoginAlert" class="alert bg-red-one" role="alert">
            <div id="statusLoginAlertBody" class="alert-body text-white"></div>
            <button class="btn-close" data-spark-close="statusLoginAlert">
                <i class="material-icons-two-tone">close</i>
            </button>
        </div>
    </div>


    <div class="form-sign-in">

        <div class="sign-in-background"></div>

        <div class="sign-in-container">
            <div class="flex-col">

                <form id="formSignIn" action="{{ route('auth') }}" method="POST">
                    @csrf

                    <div class="flex-row align-center mb-4">
                        <img src="{{ asset('assets/images/brand/neptune.png') }}" alt="Light Spark" width="64" height="64">
                        <span class="text-secondary fs-lg fw-6 ms-1"> LightSpark </span>
                    </div>

                    <span class="text-secondary fs-xs">
                        Por favor, acesse sua conta e siga para o painel.
                        <br>
                        Ainda não possui uma conta? <a href="#">Contacte-nos!</a>
                    </span>

                    <div class="flex-col mt-4">
                        <label for="inputEmail" class="form-label">E-mail</label>
                        <input type="text" id="inputEmail" class="form-control" placeholder="exemplo@spark.com">
                    </div>

                    <div class="flex-col mt-2">
                        <label for="inputPassword" class="form-label">Senha</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="●●●●●●●●">
                    </div>
                </form>

                <div class="flex-row justify-between align-end mt-4">
                    <button type="button" id="btnLogin" class="btn md bg-blue-one" onclick="login()">Entrar</button>
                    <a href="#" class="fs-xs unblock">Esqueceu sua senha?</a>
                </div>

            </div>
        </div>

    </div>
@endsection



@section('layout-scripts')
    <script src="{{ asset('js/src/components/Alert.js') }}"></script>
    <script src="{{ asset('js/src/components/Progress.js') }}"></script>
    <script src="{{ asset('js/src/components/Request.js') }}"></script>
    <script src="{{ asset('js/src/pages/login.js') }}"></script>
@endsection
