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
  <a href="{{ route('positions.create')}}" class="btn btn-primary btn-sm">Add New Position</a>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Position Name</td>
          <td class="text-center">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($position as $positions)
        <tr>
            <td>{{$positions->id}}</td>
            <td>{{$positions->position_name}}</td>
            <td class="text-center">
                <a href="{{ route('positions.edit', $positions->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('positions.destroy', $positions->id)}}" method="post" style="display: inline-block">
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