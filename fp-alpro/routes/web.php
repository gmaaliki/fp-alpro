<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TasklistController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home/{account_id}', [TasklistController::class, 'index'])->name('tasklist.index');
Route::post('/home/{account_id}', [TasklistController::class, 'store'])->name('tasklist.store');
Route::get('/home/{account_id}/createlist', [TasklistController::class, 'create'])->name('tasklist.create');
Route::delete('/home/{account_id}/list/{list_id}', [TasklistController::class, 'destroy'])->name('tasklist.destroy');

Route::get('/home/{account_id}/task/{list_id}', [TaskController::class, 'index'])->name('task.index');
Route::post('/home/{account_id}/task/{list_id}', [TaskController::class, 'store'])->name('task.store');    
Route::delete('/home/{account_id}/task/{list_id}/{task_id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::delete('/home/{account_id}/task/{list_id}/all', [TaskController::class, 'destroyall'])->name('task.destroyall');
Route::post('/home/statuschange/{task_id}', [TaskController::class, 'update'])->name('task.update');

Route::get('/', [LoginController::class, 'index']);
Route::post('/validate', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

