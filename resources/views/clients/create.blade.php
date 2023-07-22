@extends('layouts.master')

@section('title')
    HSX - Municípios - Criar
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

                                <i class="fa-solid fa-building-columns me-1"></i>
                                <i class="fa-solid fa-plus fs-7 me-3"></i>

                                Adicionar Município
                            </span>

                        </div>

                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <a href=""
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
                                        <i class="fa-solid fa-list-ul fs-1 me-2"></i>
                                        <span class="fs-5">Dados do Município</span>
                                    </div>

                                </div>

                                <div class="card-body pt-5">

                                    <form id="add_municipio_form" class="form">

                                        <div class="row fv-row mb-5">
                                            <div class="col-md-4 d-flex justify-content-center align-items-center">

                                                <div name="city_avatar_div" class="mb-1">
                                                    <label class="fs-6 fw-semibold mb-3 d-flex justify-content-center ms-2">
                                                        <span>Logo</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Arquivos permitidos: png, jpg, jpeg.">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <div class="mt-1">

                                                        <style>
                                                            .image-input-placeholder {
                                                                background-image: url('assets/media/svg/files/blank-image.svg');
                                                            }

                                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                                background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                            }
                                                        </style>

                                                        <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty"
                                                            data-kt-image-input="true">

                                                            <div class="image-input-wrapper w-120px h-120px"
                                                                style="background-image: url(''); background-size: contain;">
                                                            </div>

                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Change avatar">
                                                                <i class="ki-outline ki-pencil fs-7"></i>

                                                                <input type="file" name="avatar"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />

                                                            </label>

                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                                title="Cancel avatar">
                                                                <i class="ki-outline ki-cross fs-2"></i>
                                                            </span>

                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                                title="Remove avatar">
                                                                <i class="ki-outline ki-cross fs-2"></i>
                                                            </span>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-8">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required"
                                                            title="Entre com o nome do município">Município</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o nome do município">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="name" />
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Estado</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o estado">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <select name="state" aria-label="Select a Timezone"
                                                        data-control="select2" data-placeholder="Estado"
                                                        class="form-select  form-select-solid">
                                                        <option></option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="MT">Mato Grosso</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row fv-row mb-7">
                                            <div class="col-md-4">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">CNPJ</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Entre com o cnpj">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>

                                                <input type="text" class="form-control form-control-solid cnpj"
                                                    name="cnpj" />

                                            </div>

                                            <div class="col-md-8">

                                                <div class="fv-row mb-5">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Logradouro</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o endereço">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="address[street]" />

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">

                                                <div class="fv-row mb-5">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Número (endereço)</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o número do endereço">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="address[number]" />

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="fv-row mb-7">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Bairro </span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o bairro ">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="address[neighbor]" />

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="fv-row mb-7">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">CEP</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o CEP ">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="address[cep]" />

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="fv-row mb-7">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Email</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Entre com o email">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid"
                                                        name="email" id="email" />

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="fv-row mb-7">

                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Telefone</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Enter the contact's phone number (optional).">
                                                            <i class="ki-outline ki-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text"
                                                        class="form-control form-control-solid sp_celphones"
                                                        name="phone" />

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

            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.cnpj').mask('00.000.000/0000-00', {
                reverse: true
            });

            $('.sp_celphones').mask(SPMaskBehavior, spOptions);
        });
    </script>

    <script name="FormValidation">
        const form = document.getElementById("add_municipio_form");
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
                cnpj: {
                    validators: {
                        notEmpty: {
                            message: 'CNPJ é necessário'
                        },
                        stringLength: {
                            min: 18,
                            max: 18,
                            message: 'Por favor, entre com um CNPJ válido'
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
                'address[street]': {
                    validators: {
                        notEmpty: {
                            message: 'Logradouro é necessário'
                        }
                    }
                },
                'address[number]': {
                    validators: {
                        notEmpty: {
                            message: 'Número (endereço) é necessário'
                        }
                    }
                },

                'address[neighbor]': {
                    validators: {
                        notEmpty: {
                            message: 'Bairro é necessário'
                        }
                    }
                },

                'address[cep]': {
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
                city: {
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
                                text: "Município criado com sucesso!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, entendi!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function() {
                                //window.location = "{{ route('clients.index') }}"
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
@endsection
