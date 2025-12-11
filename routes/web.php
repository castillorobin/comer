<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/guias/reportelistapdf', [EnvioController::class, 'reportelistapdf'])->name('envios.reportelistapdf');
    Route::get('/guias/reportelistaexcel', [EnvioController::class, 'reportelistaexcel'])->name('envios.reportelistaexcel');
    
    Route::get('/guias/reporteticketpdf', [EnvioController::class, 'reporteticketpdf'])->name('envios.reporteticketpdf');
    Route::get('/guias/reporteticketexcel', [EnvioController::class, 'reporteticketexcel'])->name('envios.reporteticketexcel');

    Route::get('/guias/generadas', [EnvioController::class, 'generadas'])->name('envios.generadas');
    Route::get('/guias/print/{id}', [EnvioController::class, 'print'])->name('envios.print');
    Route::get('/guias/imprimirti', [EnvioController::class, 'imprimirti'])->name('envios.imprimirti');


    Route::post('/perfil/avatar', [ProfileController::class, 'updateAvatar'])
    ->middleware('auth')
    ->name('perfil.avatar.update');


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
