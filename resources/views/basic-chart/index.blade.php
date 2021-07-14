@extends('layouts/dashboard')

@section('main-content')
    {!! $chart->container() !!}

    <script src="{{ LarapexChart::cdn() }}"></script>
    {{ $chart->script() }}

@endsection
