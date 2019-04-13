@extends('layout')

@section('content')
<h1> list of projects</h1>

<div>
  <h2>{{$project->title}}</h2>
  <h3>{{$project->description}}</h3>
</div>
<div><a href="/project/{{$project->id}}/edit">edit</a></div>
@if($project->tasks->count())
  <div>
 
@foreach($project->tasks as $task)
<form action='/tasks/{{$task->id}}' method='post'>
  @method('PATCH')
  @csrf
  <label class="checkbox {{ $task->completed ? 'isComplete':''}}" for="completed">
  <input type="checkbox"  name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked':''}}>
{{$task->description}}
</label>
</form>
  </div>
@endforeach
@endif




<form action="/project/{{$project->id}}/tasks" method="post">
@csrf
<div class="form-group">
    <label for="description">New Task description</label>
    <textarea name="description" class="form-control"  placeholder="task description">{{$task->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add New Task</button>
</form>
@include('error')
</form>
@endsection
