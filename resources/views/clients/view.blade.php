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

                        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">

                            <span
                                class="page-heading d-flex align-items-center justify-content-center text-dark fw-bold fs-3 m-0">
                                <i class="fa-solid fa-user me-3 fs-3"></i>
                                Ver Cliente
                            </span>

                        </div>

                        <div class="d-flex align-items-center gap-2 gap-lg-3">

                            <a href="{{ route('clients.index') }}"
                                class="btn btn-flex btn-primary h-40px fs-7 fw-bold">Visão
                                Geral</a>
                        </div>

                    </div>

                </div>

            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid">

                <div id="kt_app_content_container" class="app-container container-fluid">

                    <div class="row g-7">

                        <div class="col">

                            <div class="card card-flush h-lg-100" id="kt_contacts_main">

                                <div class="card-header pt-7">

                                    <div class="card-title">
                                        <i class="fa-solid fa-list-ul fs-1 me-2"></i>
                                        <span class="fs-5">Detalhes do Cliente</span>
                                    </div>

                                    <div class="card-toolbar gap-3 d-flex">

                                        <div class="d-flex justify-content-end align-items-center me-3">
                                            <span
                                                class="badge  fs-4"> </span>
                                        </div>

                                        <a class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-outline ki-dots-square fs-2"></i>
                                        </a>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">

                                            <div class="menu-item px-3">
                                                <a href="{{ route('clients.edit', $client->id) }}" class="menu-link px-3">
                                                    <i class="fa-solid fa-pencil"></i>&nbsp Editar</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="card-body pt-5">

                                    <div class="d-flex gap-7 align-items-center">

                                        <div class="symbol symbol-circle symbol-100px">
                                            <!--img src="assets/media/avatars/logo-cdp.png" alt="image" /-->
                                        </div>

                                        <div class="d-flex flex-column gap-2">

                                            <h3 class="mb-0">{{ $client->name }}</h3>

                                            <div class="d-flex align-items-center gap-2 mt-2">
                                                <span class="text-muted me-2">RG</span>
                                                <span class="text-dark fw-bold rg">{{ $client->rg }}</span>
                                            </div>

                                            <div class="d-flex align-items-center gap-2">
                                                <span class="text-muted">CPF</span>
                                                <span class="text-dark fw-bold cpf">{{ $client->cpf }}</span>
                                            </div>

                                        </div>

                                    </div>

                                    <ul
                                        class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">

                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary d-flex align-items-center pb-4 active"
                                                data-bs-toggle="tab" href="#view_general">
                                                <i class="fa-solid fa-house fs-4 me-1 mb-1"></i>Geral</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary d-flex align-items-center pb-4"
                                                data-bs-toggle="tab" href="#view_activity">
                                                <i class="fa-solid fa-list fs-4 me-1 mb-1"></i>Últimas Atividades</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="">

                                        <div class="tab-pane fade show active" id="view_general" role="tabpanel">

                                            <div class="d-flex flex-column gap-5 mt-7">

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">CPF</div>
                                                    <div class="fw-bold fs-5 cpf">{{ $client->cpf }}</div>
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">RG</div>
                                                    <div class="fw-bold fs-5 rg">{{ $client->rg }}</div>
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">Estado</div>
                                                    <div class="fw-bold fs-5">{{ $client->city->state->name }}</div>
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">Cidade</div>
                                                    <div class="fw-bold fs-5">{{ $client->city->name }}</div>
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">Endereço</div>
                                                    <div class="fw-bold fs-5">{{ $client->street }},
                                                        {{ $client->street_number }} - {{ $client->neighbor }},
                                                        {{ $client->cep }}</div>
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <div class="fw-bold text-muted">Telefone</div>
                                                    <div class="fw-bold fs-5">{{ $client->phone }}</div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade " id="view_activity" role="tabpanel">

                                            <div id="kt_schedule_day_1" class="tab-pane fade show active">

                                                <div class="d-flex flex-stack position-relative mt-8">

                                                    <div
                                                        class="position-absolute h-100 w-4px bg-success rounded top-0 start-0">
                                                    </div>

                                                    <div class="fw-semibold ms-5 text-gray-600">

                                                        <div class="fs-5">16:30 - 17:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                        </div>

                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Requerimento
                                                            009 - Enviado</a>

                                                        <div class="text-gray-400">Responsável:
                                                            <a href="#">Fulano Contador</a>
                                                        </div>

                                                    </div>

                                                    <a href="#"
                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">Ver
                                                        Detalhes</a>

                                                </div>

                                                <div class="d-flex flex-stack position-relative mt-8">

                                                    <div
                                                        class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                    </div>

                                                    <div class="fw-semibold ms-5 text-gray-600">

                                                        <div class="fs-5">16:30 - 17:30
                                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                        </div>

                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Requerimento
                                                            003 - Retorno</a>

                                                        <div class="text-gray-400">Responsável:
                                                            <a href="#">Sicrana Secretária</a>
                                                        </div>

                                                    </div>

                                                    <a href="#"
                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">Ver
                                                        Detalhes</a>

                                                </div>

                                                <div class="d-flex flex-stack position-relative mt-8">

                                                    <div
                                                        class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                    </div>

                                                    <div class="fw-semibold ms-5 text-gray-600">

                                                        <div class="fs-5">9:00 - 10:00
                                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                        </div>

                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Requerimento
                                                            005 - Em processamento</a>

                                                        <div class="text-gray-400">Responsável:
                                                            <a href="#">Beltrano Vice</a>
                                                        </div>

                                                    </div>

                                                    <a href="#"
                                                        class="btn btn-bg-light btn-active-color-primary btn-sm">Ver
                                                        Detalhes</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

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
