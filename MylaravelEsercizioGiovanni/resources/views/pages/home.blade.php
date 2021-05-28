@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($matches as $match)
            <li>
              <h3>
                <a href="{{ route('match', $match -> id) }}">
                  {{ $match -> team1 }} vs
                  {{ $match -> team2 }}
                </a>
                <a href="{{route('edit', $match -> id)}}">
                  &#9998;
                </a>
                <a href="{{route('destroy', $match-> id)}}">
                  &#10060;
                </a>
              </h3>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
