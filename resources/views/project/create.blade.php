@extends('layout')
@section('title','create project')
@section('content')
<form action="/project" method="post">
@csrf
  <div class="form-group">
    <label for="title">Project Title</label>
    <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="project title">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <textarea name="description" class="form-control" value="{{old('description')}}" placeholder="project description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add New project</button>
  
@include('error')
</form>


@endsection
