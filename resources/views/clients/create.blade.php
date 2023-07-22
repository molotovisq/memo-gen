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

                                <i class="fa-solid fa-user-plus me-2 fs-3"></i>

                                Adicionar Cliente
                            </span>

                        </div>

                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <a href="#"
                                class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">
                                Pré-Visualização</a>

                            <a href="" class="btn btn-flex btn-primary h-40px fs-7 fw-bold">Visão
                                Geral</a>
                        </div>

                    </div>

                </div>

            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid">

                <div id="kt_app_content_container" class="app-container container-fluid">

                    <div class="row g-7">

                        <div class="col-xl-12">

                            <div class="card card-flush h-lg-100" id="kt_contacts_main">

                                <div class="card-header pt-7">

                                    <div class="card-title">

                                        <i class="fa-solid fa-address-card fs-1 me-2"></i>
                                        <span class="fs-5 fw-bold">Dados do Cliente</span>
                                    </div>

                                </div>

                                <div class="card-body pt-5">

                                    <form id="add_client_form" class="form">

                                        <div class="row fv-row mb-5">

                                            <div class="col-lg-6">
                                                <div class="fv-row">
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required" title="Entre com o nome do cliente">Nome
                                                            Completo</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o nome do cliente">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="name" />
                                                </div>

                                            </div>

                                            <div class="col-lg-3">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">RG</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Entre com o rg">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>

                                                <input type="text" class="form-control form-control-solid"
                                                    name="rg" />

                                            </div>

                                            <div class="col-lg-3">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">CPF</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Entre com o cpf">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>

                                                <input type="text" class="form-control form-control-solid cpf"
                                                    name="cpf" />

                                            </div>

                                        </div>

                                        <div class="separator mb-6"></div>

                                        <div class="row fv-row mb-10 mt-10">
                                            <div class="d-flex">
                                                <i class="fa-solid fa-map-location fs-1 me-2"></i>
                                                <span class="fs-5 fw-bold">Endereço</span>
                                            </div>
                                        </div>

                                        <div class="row fv-row mb-5">
                                            <div class="col-lg-6">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Estado</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Entre com o estado">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>

                                                <select id="client_state_selector" name="state"
                                                    class="form-select  form-select-solid" >
                                                    <option></option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">
                                                            {{ $state->short }} - {{ $state->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Cidade</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Entre com a cidade">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>

                                                <select id="client_city_selector" name="city_id"
                                                    class="form-select  form-select-solid">
                                                    <option></option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}">

                                                            {{ $city->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row fv-row mb-7">

                                            <div class="col-lg-6">

                                                <div class="fv-row mb-5">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Logradouro</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o endereço">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="street" />

                                                </div>

                                            </div>

                                            <div class="col-lg-2">

                                                <div class="fv-row mb-5">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Número</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o endereço">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="street_number" />

                                                </div>

                                            </div>

                                            <div class="col-lg-2">

                                                <div class="fv-row mb-5">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Bairro</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o endereço">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="neighbor" />

                                                </div>

                                            </div>

                                            <div class="col-lg-2">

                                                <div class="fv-row mb-7">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">CEP</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o CEP ">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="cep" />

                                                </div>

                                            </div>

                                        </div>

                                        <div class="separator mb-6"></div>

                                        <div class="d-flex justify-content-end">

                                            {{ @csrf_field() }}

                                            <button type="reset" class="btn btn-light me-3">Cancelar</button>

                                            <button name="submitButton" class="btn btn-primary">
                                                <span class="indicator-label">Salvar</span>

                                            </button>

                                        </div>

                                    </form>

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
    <script src="assets/js/jqserialize-json/jquery.serializejson.js"></script>

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
            $('.cpf').mask('000.000.000-00',{
                clearIfNotMatch: true
            });

            $('.sp_celphones').mask(SPMaskBehavior, spOptions);
        });
    </script>

    <script name="FormValidation">
        const form = document.getElementById("add_client_form");
        const submitButton = form.querySelector('button[name="submitButton"]');
        var options = {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Nome é necessário'
                        },
                        stringLength: {
                            min: 6,
                            message: 'Por favor, entre com o nome completo'
                        }
                    }
                },
                rg: {
                    validators: {
                        notEmpty: {
                            message: 'Insira um RG válido'
                        }
                    }
                },
                cpf: {
                    validators: {
                        notEmpty: {
                            message: 'Insira um CPF válido'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email é necessário'
                        },
                        emailAddress: {
                            message: 'Por favor, entre com um email válido'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Insira um telefone válido'
                        }
                    }
                },
                street: {
                    validators: {
                        notEmpty: {
                            message: 'Logradouro é necessário'
                        }
                    }
                },
                street_number: {
                    validators: {
                        notEmpty: {
                            message: 'Número (endereço) é necessário'
                        }
                    }
                },

                neighbor: {
                    validators: {
                        notEmpty: {
                            message: 'Bairro é necessário'
                        }
                    }
                },

                cep: {
                    validators: {
                        notEmpty: {
                            message: 'CEP é necessário'
                        }
                    }
                },

                state: {
                    validators: {
                        notEmpty: {
                            message: 'Estado é necessário'
                        }
                    }
                },
                city_id: {
                    validators: {
                        notEmpty: {
                            message: 'Cidade é necessário'
                        }
                    }
                },
            },
            plugins: {
                submitButton: new FormValidation.plugins.SubmitButton(),
                //defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                trigger: new FormValidation.plugins.Trigger,
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: ""
                })
            }
        };


        var fv = FormValidation.formValidation(form, options);

        $(form).on('change', function(e){
            fv.validate();
        });
        $(form).on('submit', function(e) {

            console.log("Clicked on Submit");
            fv.validate().then(function(status) {
                if (status == 'Valid') {

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('clients.store') }}",

                        data: {
                            "_token": $('input[name=_token]').val(),
                            "form": $(form).serializeJSON(),
                            dataType: "json"

                        },

                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                text: "Cliente adicionado com sucesso!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, entendi!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function() {
                                window.location = "{{ route('clients.index') }}"
                            });
                        },

                        error: function() {

                            Swal.fire({
                                text: "Houve algum erro na submissão do formulário.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Tentar novamente",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })


                        }

                    });

                } else {

                    console.log("Invalid");
                }
            });

            e.preventDefault();
        })
    </script>

    <script name="Select2">
        let stateSelector = $('#client_state_selector').select2({
            placeholder: "Estado...",
        });
        let citySelector = $('#client_city_selector').select2({
            placeholder: "Cidade...",
        });
    </script>
@endsection
