<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnvioController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

});


    //Guias
    Route::get('/guias/inicio', [EnvioController::class, 'inicio'])->name('envios.inicio');

    Route::post('/envios', [EnvioController::class, 'store'])->name('envios.store');

    Route::get('/guias/mistickets', [EnvioController::class, 'mistickets'])->name('envios.mistickets');
    Route::get('/guias/misenvios/{id}', [EnvioController::class, 'misenvios'])->name('envios.misenvios');

    Route::get('/envios/filtrarticket', [EnvioController::class, 'filtrarTicket'])->name('envios.filtrarticket');
    Route::get('/envios/filtrarestado/{id}', [EnvioController::class, 'filtrarestado'])->name('envios.filtrarestado');


Route::get('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    
    return redirect('/login');
})->name('logout');


Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
