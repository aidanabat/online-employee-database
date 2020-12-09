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
      <form method="post" action="{{ route('skills.update', $skill->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="skill_name">Skill Name</label>
              <input type="text" class="form-control" name="skill_name" value="{{ $skill->skill_name }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update Skill</button>
      </form>
  </div>
</div>
@endsection