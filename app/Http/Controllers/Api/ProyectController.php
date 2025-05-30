<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Request\UpdateProjectRequest;
use App\Http\Request\StoreProjectRequest;

class ProyectController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->has('status')){
            $query ->where('status',$request->status);
        }
        if ($request->has('name')){
            $query ->where('name','like',"%{$request->name}%");
        }
        if ($request->has('start_date')){
            $query ->whereDate('created_at','>=',$request->start_date);
        }
        if ($request->has('end_date')){
            $query ->whereDate('created_at','>=',$request->end_date);
        }

        return response()->json($query->get());
    }

    
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());
        return response()->json($project,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response ()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
       $project->update ($request -> validated());
       return response ()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(['message'=>'Proyecto eliminado']); 
    }
}
