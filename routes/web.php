<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $numberOfProjects = 100;
    return view('main', [
        "numberOfProjects" => $numberOfProjects,
    ]); //.blade.php
});
// Route::view('/projects', 'projects.list');
// // list
// Route::get('/projects', [ProjectController::class, "index"]);
// // details
// Route::get('/projects/{project}', [ProjectController::class, "details"])->name("projects.details");
// // create
// Route::get('/projects/create', [ProjectController::class, "create"])->name("projects.create");
// Route::post('/projects/create', [ProjectController::class, "store"]);
// // update
// Route::get('/projects/{project}/edit', [ProjectController::class, "edit"])->name("projects.edit");
// Route::put('/projects/{project}/edit', [ProjectController::class, "update"]);
// // delete
// Route::delete('/projects/{project}', [ProjectController::class, "delete"])->name("projects.delete");
Route::resource("/projects", ProjectController::class);