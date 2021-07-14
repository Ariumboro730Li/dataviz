@extends('layouts.dashboard')

@section('main-content')

<div class="bg-white p-2 rounded">

   <h2 class="p-2">Monthly</h2>

   {!! $occupancy_by_month->container() !!}
</div>

   <script src="{{ LarapexChart::cdn() }}"></script>
   {{ $occupancy_by_month->script() }}

@endsection
