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
  <div class="card-header">
    Edit & Update
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
      <form method="post" action="{{ route('employees.update', $employee->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="middle_name">Middle Name</label>
              <input type="text" class="form-control" name="middle_name" value="{{ $employee->middle_name }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="birthday">Birthday</label>
              <input type="date" class="form-control" name="birthday" value="{{ $employee->birthday }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" value="{{ $employee->age }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="position_id">Position ID</label>
              <input type="number" class="form-control" name="position_id" value="{{ $employee->position_id }}"/>
          </div>
          
          
          <button type="submit" class="btn btn-block btn-danger">Update Employee</button>
      </form>
  </div>
</div>
@endsection