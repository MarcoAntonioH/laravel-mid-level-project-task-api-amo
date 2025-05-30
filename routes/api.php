<?php
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;

Route:: prefix('projects')->group(function(){
    route::get('/',[ProjectController::class,'index']);
    route::post('/',[ProjectController::class,'store']);
    route::get('/{project}',[ProjectController::class,'show']);
    route::put('/{project}',[ProjectController::class,'update']);
    route::delete('/{project}',[ProjectController::class,'destroy']);
    
});

Route:: prefix('Tasks')->group(function(){
    route::get('/',[TaskController::class,'index']);
    route::post('/',[TaskController::class,'store']);
    route::get('/{task}',[TaskController::class,'show']);
    route::put('/{task}',[TaskController::class,'update']);
    route::delete('/{task}',[TaskController::class,'destroy']);
    
});
