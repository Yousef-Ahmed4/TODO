<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

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

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {

        // your actual routes
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/', [TasksController::class, 'index']);
            Route::get('/tasks/create', [TasksController::class, 'create']);
            Route::post('/tasks', [TasksController::class, 'store']);
            Route::patch('/tasks/{id}', [TasksController::class, 'complete_task']);
            Route::delete('/tasks/{id}', [TasksController::class, 'delete']);
        });
        Route::get(
            '/login',
            function () {
                return view('auth.login');
            }
        );
        Route::post('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'registration'])->name('registration');
        Route::post('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/logout', [AuthController::class, 'logout']);
        Route::get('/admin', [AuthController::class, 'adminIndex'])->middleware(['auth', 'role:admin'])->name('admin.index');
    });
}
