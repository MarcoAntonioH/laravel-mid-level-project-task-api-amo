<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Request\UpdateTaskRequest;
use App\Http\Request\StoreTaskRequest;

class TaskController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Task::query();

        if ($request->has('status')){
            $query ->where('status',$request->status);
        }
        if ($request->has('priority')){
            $query ->where('priority',$request->priority);
        }

        if ($request->has('due_date')){
            $query ->whereDate('due_date',$request->due_date);

        if ($request->has('project_id')){
            $query ->whereDate('project_id',$request->project_id);
        }
    }

        return response()->json($query->get());
    
}

    
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());
        return response()->json($task,201);

    }

    
    public function show(Task $task)
    {
        return response ()->json($task);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
       $task->update ($request -> validated());
       return response ()->json($task);
    }

    
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message'=>'Tarea eliminado']); 
    }
}