@extends('layouts.app')

@section('content')

  <div class="container-fluid">
      <div class="row">
          <div class="col-md-2">

              <div class="mb-3">
                  <div class="bg-secondary text-white p-2 rounded hover:text-black">
                      Occupancy Rate <br/>
                  </div>
                  <div class="bg-light p-1 rounded">
                      <a href="{{url('/occupancy-rate')}}">Overview</a>
                  </div>
                  <div class="bg-light p-1 rounded">
                      <a href="{{url('/occupancy-rate/room')}}">By room category</a>
                  </div>
                  <div class="bg-light p-1 rounded">
                      <a href="{{url('/occupancy-rate/bed')}}">By bed ype</a>
                  </div>
              </div>

          </div>

          <div class="col-md-10">
              @yield('main-content')
          </div>
      </div>
  </div>

@endsection
