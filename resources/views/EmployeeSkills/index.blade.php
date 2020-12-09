@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="/" class="btn btn-primary btn-sm">Return Home</a>
  <a href="{{ route('employeeSkills.create')}}" class="btn btn-primary btn-sm">Add New Employee Skill</a>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Employee ID</td>
          <td>Skill ID</td>
          <td class="text-center">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employeeSkill as $employeeSkills)
        <tr>
            <td>{{$employeeSkills->id}}</td>
            <td>{{$employeeSkills->employee_id}}</td>
            <td>{{$employeeSkills->skill_id}}</td>
            <td class="text-center">
                <a href="{{ route('employeeSkills.edit', $employeeSkills->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('employeeSkills.destroy', $employeeSkills->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection