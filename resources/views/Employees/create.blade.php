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
<a href="/employees" class="btn btn-primary btn-sm">Back</a>
  <div class="card-header">
    Add Employee
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
      <form method="post" action="{{ route('employees.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="middle_name">Middle Name</label>
              <input type="text" class="form-control" name="middle_name"/>
          </div>


          <div class="form-group">
              <label for="birthday">Birthday</label>
              <input type="date" class="form-control" name="birthday"/>
          </div>

          <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age"/>
          </div>

          <div class="form-group">
              <label for="position_id">Position ID</label>
              <input type="number" class="form-control" name="position_id"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Add Employee</button>
      </form>
  </div>
</div>
@endsection