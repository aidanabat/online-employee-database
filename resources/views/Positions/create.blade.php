@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
<a href="/positions" class="btn btn-primary btn-sm">Back</a>
  <div class="card-header">
    Add Position
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('positions.store') }}">
          <div class="form-group">
              @csrf
              <label for="position_name">Position Name</label>
              <input type="text" class="form-control" name="position_name"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Add Position</button>
      </form>
  </div>
</div>
@endsection