@extends('layout')
@section('title','all projects')
@section('content')
<h1> list of projects</h1>

<ul>
@foreach ($project as $project )

  <li><a href="/project/{{$project->id}}">{{$project->title}}</a></li>
@endforeach
</ul>
<a href="/project/create">Create new project</a>
@endsection
