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
  <a href="{{ route('employees.index')}}" class="btn btn-primary btn-sm">Employees Table</a><br/>
  <a href="{{ route('positions.index')}}" class="btn btn-primary btn-sm">Positions Table</a><br/>
  <a href="{{ route('skills.index')}}" class="btn btn-primary btn-sm">Skills Table</a><br/>
  <a href="{{ route('employeeSkills.index')}}" class="btn btn-primary btn-sm">Employee Skills Table</a><br/>
<div>
@endsection