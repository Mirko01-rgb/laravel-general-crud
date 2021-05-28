@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <h1>
          Match:
        </h1>
        <h3>
          Point Team 0 --> {{ $match -> point1}}
        </h3>
        <h3>Point Team 1 --> {{ $match -> point2 }}</h3>
        @if ($match -> result)     {{--result se e'1 e'true e entra nell' if     --}}
          <h3>Ha vinto il team {{$match -> result}} --> {{$match -> team2}}</h3>
        @else
          <h3>Ha vinto il team {{$match -> result}} -->  {{$match -> team1}}</h3>
        @endif
      </div>
    </div>
  </div>
@endsection
