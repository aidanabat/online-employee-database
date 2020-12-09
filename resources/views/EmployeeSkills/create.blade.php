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
<a href="/employeeSkills" class="btn btn-primary btn-sm">Back</a>
  <div class="card-header">
    Add Employee Skill
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
      <form method="post" action="{{ route('employeeSkills.store') }}">
          <div class="form-group">
            @csrf
              <label for="employee_id">Employee ID</label>
              <input type="number" class="form-control" name="employee_id"/>
          </div>

          <div class="form-group">
            @csrf
              <label for="skill_id">Skill ID</label>
              <input type="number" class="form-control" name="skill_id"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Add Employee Skill</button>
      </form>
  </div>
</div>
@endsection