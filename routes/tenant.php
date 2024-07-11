<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
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
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [AuthController::class, 'adminIndex'])->middleware(['auth', 'role:admin'])->name('admin.index');
});
