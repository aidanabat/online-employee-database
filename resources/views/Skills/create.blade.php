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
<a href="/skills" class="btn btn-primary btn-sm">Back</a>
  <div class="card-header">
    Add Skill
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
      <form method="post" action="{{ route('skills.store') }}">
          <div class="form-group">
              @csrf
              <label for="skill_name">Skill Name</label>
              <input type="text" class="form-control" name="skill_name"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Add Skill</button>
      </form>
  </div>
</div>
@endsection