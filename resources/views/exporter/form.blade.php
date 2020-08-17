@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', 'Exportar datos')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-data"></i>
        Exportar Datos
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <div class="panel-body">
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <select name="" id="" class="form-control">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="btn btn-primary btn-md pull-right" type="submit">
                                        primary
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
