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
  <a href="{{ route('employees.create')}}" class="btn btn-primary btn-sm">Add New Employee</a>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Middle Name</td>
          <td>Birthday</td>
          <td>Age</td>
          <td>Position ID</td>
          <td class="text-center">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employees)
        <tr>
            <td>{{$employees->id}}</td>
            <td>{{$employees->first_name}}</td>
            <td>{{$employees->last_name}}</td>
            <td>{{$employees->middle_name}}</td>
            <td>{{$employees->birthday}}</td>
            <td>{{$employees->age}}</td>
            <td>{{$employees->position_id}}</td>
            <td class="text-center">
                <a href="{{ route('employees.edit', $employees->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employees->id)}}" method="post" style="display: inline-block">
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