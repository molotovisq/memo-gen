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
