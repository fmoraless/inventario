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
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <!-- form start -->
                    <div class="panel-body">
                        {!! Form::open([
                            'route' => 'voyager.exports.download',
                            'method' => 'POST'
                            ]) !!}
                            <div class="row">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                 @endif
                                <div class="form-group col-md-2">
                                    {!!
                                        Form::select('exportable',[
                                            'User' => 'Usuarios',
                                            'Product' => 'Productos',
                                            'Purchase' => 'Compras',
                                        ], null, ['class' => 'form-control', 'style' => 'margin-top: 5px']);
                                    !!}
                                </div>
                                <div class="form-group col-md-2">
                                    {!! Form::submit('Exportar datos', ['class' => 'btn btn-primary btn-block btn-md pull-right']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
