@extends('layouts.main-layout')
@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="POST" action="{{route('store')}}">
    @csrf
    @method('POST')
    <div class="form-group row">
      <label for="team1" class="col-md-3 col-form-label text-md-right">
        Team 1
      </label>
      <div class="col-md-6">
        <input id="team1" type="text" class="form-control" name="team1">
      </div>
    </div>

    <div class="form-group row">
      <label for="team2" class="col-md-3 col-form-label text-md-right">
        Team 2
      </label>
      <div class="col-md-6">
        <input id="team2" type="text" class="form-control" name="team2">
      </div>
    </div>

    <div class="form-group row">
      <label for="point1" class="col-md-3 col-form-label text-md-right">
        Point 1
      </label>
      <div class="col-md-6">
        <input id="point1" type="number" class="form-control" name="point1">
      </div>
    </div>

    <div class="form-group row">
      <label for="point2" class="col-md-3 col-form-label text-md-right">
        Point 2
      </label>
      <div class="col-md-6">
        <input id="point2" type="number" class="form-control" name="point2">
      </div>
    </div>

    <div class="form-group row">
      <label for="result" class="col-md-3 col-form-label text-md-right">
        Result
      </label>
      <div class="col-md-6">
        <select id="result" type="number" class="form-control" name="result">
          <option value="0">Team 1</option>
          <option value="1"> Team2</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">
          Create
        </button>
      </div>
    </div>
  </form>

@endsection
