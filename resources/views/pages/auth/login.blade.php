@extends('layouts.clean')


@section('title', 'Login')


@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
@endsection


@section('content')
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
                    <button type="button" class="btn md bg-blue-one" onclick="login('formSignIn')">Entrar</button>
                    <a href="#" class="fs-xs unblock">Esqueceu sua senha?</a>
                </div>

            </div>
        </div>

    </div>
@endsection
