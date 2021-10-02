@extends('layouts.frame')



@section('head-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/provedores.css') }}">
@endsection



@section('frame-top')
    <span class="text-secondary fs-xl fw-7 ff-poppins">Provedores</span>
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
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection



@section('frame-scripts')
    <script src="{{ asset('js/src/components/Request.js') }}"></script>
    <script src="{{ asset('js/src/pages/provedores/index.js') }}"></script>
@endsection
