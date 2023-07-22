@extends('layouts.master')

@section('title')
    Memo - Clientes - Criar
@endsection

@section('base')
    <base href="../../" />
@endsection

@section('head')
    @include('includes.head')
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">

                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">

                    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

                        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3 mt-2 mb-2">

                            <span
                                class="page-heading d-flex align-items-center justify-content-center text-dark fw-bold fs-3 m-0">
                                <i class="fa-solid fa-users me-3 fs-3"></i>
                                Lista de Clientes
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid">

                <div id="kt_app_content_container" class="app-container container-fluid">

                    <div class="card">

                        <div class="card-header border-0 pt-6">

                            <div class="card-title">

                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                    <input id="client_search_input" type="text"
                                        class="form-control form-control-solid w-250px ps-13"
                                        placeholder="Procurar Clientes" />
                                </div>

                            </div>

                            <div class="card-toolbar">

                                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                                    <div class="w-150px me-3">

                                        <select id="client_status_selector" class="form-select form-select-solid"
                                            data-control="select2">
                                            <option value="Todos">Todos</option>
                                            <option value="Ativo">Ativo</option>
                                            <option value="Bloqueado">Bloqueado</option>
                                        </select>

                                    </div>

                                    <a href="{{ route('clients.create') }}" type="button" class="btn btn-primary">Adicionar
                                        Cliente</a>

                                </div>

                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-customer-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                        data-kt-customer-table-select="delete_selected">Delete
                                        Selected</button>
                                </div>

                            </div>

                        </div>

                        <div class="card-body pt-0">

                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="client_list_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-70px">ID</th>
                                        <th class="min-w-125px">Nome</th>
                                        <th class="min-w-125px">RG</th>
                                        <th class="min-w-125px">Estado</th>
                                        <th class="min-w-125px">Cidade</th>
                                        <th class="min-w-125px">Data de Criação</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">

                                    @foreach ($clients as $client)
                                        <tr>
                                            <td class="text-gray-800">{{ $client->id }}</td>
                                            <td>
                                                <a href="{{ route('clients.show', $client->id) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $client->name }}</a>
                                            </td>
                                            <td>{{ $client->rg }}</td>
                                            <td>{{ $client->city->state->name }}</td>
                                            <td>{{ $client->city->name}}</td>
                                            <td>{{ $client->created_at }}</td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Ações
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>

                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">



                                                    <div class="menu-item px-3">

                                                        <a href="{{ route('clients.show', $client->id) }}"
                                                            class="menu-link px-3"><i class="fa-solid fa-eye"></i>&nbsp
                                                            Ver</a>
                                                    </div>

                                                    <div class="menu-item px-3">

                                                        <a href="{{ route('clients.edit', $client->id) }}"
                                                            class="menu-link px-3"><i class="fa-solid fa-pen"></i>&nbsp
                                                            Editar</a>
                                                    </div>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
    @extends('includes.scripts')

    @parent

    <script src="assets/js/jqmask/jquery.mask.js"></script>

    <script name="jQueryMask">
        $(document).ready(function() {
            var SPMaskBehavior = function(val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    },
                    clearIfNotMatch: true
                };


            $('.cep').mask('00000-000');
            $('.cnpj').mask('00.000.000/0000-00', {
                reverse: true
            });
            $('.cpf').mask('000.000.000-00');

            $('.sp_celphones').mask(SPMaskBehavior, spOptions);
        });
    </script>


@endsection
