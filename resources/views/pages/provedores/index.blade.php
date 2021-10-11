@extends('layouts.admin')



@section('layout-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/provedores.css') }}">
@endsection



@section('provedores', 'active')



@section('frame-top')
    <span class="text-secondary fs-xl fw-7 ff-poppins">Provedores</span>
    <button type="button" class="btn bg-blue-one" onclick="newProvedorModal()">
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



@section('modal-container')
    <div id="new-provedor-modal" class="modal-content">
        <div class="modal modal-md">
            <header class="modal-header">
                <button type="button" data-modal-close="new-provedor-modal">
                    <i class="material-icons">close</i>
                </button>
            </header>
            <div class="modal-body">

            </div>
            <footer class="modal-footer">
                <button type="button" class="btn md bg-default" data-modal-close="new-provedor-modal">Cancelar</button>
                <button type="button" class="btn md bg-blue-one ms-1">Salvar</button>
            </footer>
        </div>
    </div>
@endsection



@section('layout-scripts')
    <script src="{{ asset('js/http/Request.js') }}"></script>
    <script src="{{ asset('js/app/components/Modal.js') }}"></script>
    <script src="{{ asset('js/app/pages/provedores/index.js') }}"></script>
@endsection
