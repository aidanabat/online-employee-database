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
      <form method="post" action="{{ route('employeeSkills.update', $employeeSkill->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="employee_id">Employee ID</label>
              <input type="number" class="form-control" name="employee_id" value="{{ $employeeSkill->employee_id }}"/>
          </div>

          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="skill_id">Skill ID</label>
              <input type="number" class="form-control" name="skill_id" value="{{ $employeeSkill->skill_id }}"/>
          </div>
          
          
          <button type="submit" class="btn btn-block btn-danger">Update Employee Skill</button>
      </form>
  </div>
</div>
@endsection