<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\FormComplainController;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/history', [Controller::class, 'history'])->name('history');

Route::get('/supervisor/dashboard', [SupervisorController::class, 'dashboard'])->name('supervisor/dashboard');

Route::get('/cm/dashboard', [CMController::class, 'cm_dashboard'])->name('cm/dashboard');
Route::get('/cm/penjadwalan/{id}', [CMController::class, 'viewPenjadwalan']);
Route::post('/penjadwalan', [CMController::class, 'penjadwalan']);
Route::get('/cm/progress', [CMController::class, 'progress'])->name('cm/progress');
Route::get('/pengawas/resolve/{id}', [PController::class, 'resolve']);
Route::post('/pengawas/store', [PController::class, 'store']);





Route::get('/pegawai/dashboard', [FormComplainController::class, 'TableFormComplain'])->name('/pegawai/dashboard');
Route::get('/form_complain', [FormComplainController::class, 'plusComplain'])->name('form_complain');
Route::post('/form_complain/store', [FormComplainController::class, 'storeComplain'])->name('form_complain/store');
Route::get('/fc-show/{id}', [FormComplainController::class, 'show']);
Route::get('/fc-edit/{id}', [FormComplainController::class, 'edit']);
Route::post('fc-edit/form_complain/update', [FormComplainController::class, 'update'])->name('fc-edit/form_complain/update');
Route::get('fc-delete/{id}', [FormComplainController::class, 'delete']);
Route::get('fc-validate/{id}', [FormComplainController::class, 'valid']);
Route::get('fc-undo/{id}', [FormComplainController::class, 'undo']);
Route::get('fc-reject/{id}', [FormComplainController::class, 'reject']);
Route::get('fc-unreject/{id}', [FormComplainController::class, 'unreject']);


require __DIR__.'/auth.php';

