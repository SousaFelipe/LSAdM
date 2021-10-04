@extends('layouts.frame')



@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/provedores.css') }}">
@endsection



@section('frame-top')
    <span class="text-secondary fs-xl fw-7 ff-poppins">Provedores</span>
    <button type="button" class="btn bg-blue-one">
        <i class="material-icons fs-16 me-1">add</i> Novo
    </button>
@endsection



@section('content')

    <div class="card">
        <div class="card-body ms-4 mt-3 me-4 mb-4">
            <table id="provedores">
                <thead>
                    <tr>
                        <th>CNPJ</th>
                        <th>RAZÃO</th>
                        <th>ENDEREÇO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection



@section('frame-scripts')
    <script src="{{ asset('js/http/Request.js') }}"></script>
    <script src="{{ asset('js/app/pages/provedores/index.js') }}"></script>
@endsection
