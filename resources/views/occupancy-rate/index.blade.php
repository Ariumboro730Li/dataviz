@extends('layouts.dashboard')

@section('main-content')

<div class="bg-white p-2 rounded">
   <h2 class="p-2">Quarter</h2>
   {!! $occupancy_by_quarter->container() !!}
   <script src="{{ LarapexChart::cdn() }}"></script>
   {{ $occupancy_by_quarter->script() }}
</div>

<div class="bg-white p-2 rounded">
   <h2 class="p-2">Monthly</h2>
   {!! $occupancy_by_month->container() !!}
   <script src="{{ LarapexChart::cdn() }}"></script>
   {{ $occupancy_by_month->script() }}
</div>

@endsection
