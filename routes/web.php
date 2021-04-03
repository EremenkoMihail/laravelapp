<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Task;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $tasks = Task::get();
    return view('tasks.index', compact('tasks'));
});

Route::get('task/{id}', function ($id){
    $task = Task::find($id);
    return view('tasks.task', compact('task'));
});
