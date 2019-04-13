@extends('layout')
@section('title','create project')
@section('content')
<form action="/project/{{$project->id}}" method="post">
@csrf
   @method('PATCH')
  <div class="form-group">
    <label for="title">Project Title</label>
    <input type="text" name="title" class="form-control"  placeholder="project title" value="{{$project->title}}">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <textarea name="description" class="form-control"  placeholder="project description">{{$project->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">updates</button>
</form>

<div>
  <form action="/project/{{$project->id}}" method="POST">
    @method('DELETE')
    @csrf
      <button type="submit" class="btn btn-primary">delete</button>
</form>
</div>

@endsection
