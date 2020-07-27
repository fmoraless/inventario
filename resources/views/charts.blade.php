@extends('layouts.app')

@section('content')
    <div class="container">
        {!! $chart->html() !!}
    </div>
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
@endsection
