<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
class ProjectTaskController extends Controller
{
    
    public function store(Project $project)
    {
        $attribute= request()->validate([
            'description'=>['required', 'min:3','max:255']
        ]);
       $project->AddTask($attribute);
        return back();
    }
    
    
    public function update(Task $task)
    {
    $method = request()->has('completed') ? 'complete' : 'incomplete';
    $task->$method();
        return back();
    }
}
