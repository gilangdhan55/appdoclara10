<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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

Route::get('/', function () {
    return view('dashboard.index');
});
//Route::resource('pasien', PasienController::class);

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::post('/add', [PasienController::class, 'store'])->name('add.store');
Route::get('/pasien/{id}', [PasienController::class, 'show'])->name('pasien.show');
Route::put('/pasien/edit', [PasienController::class, 'update'])->name('pasien.update');
Route::patch('/pasien/{id}', [PasienController::class, 'update']);
Route::get('/pasien/delete/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');


Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

Route::group([
    'prefix' => 'patients',
    'as' => 'patient.',
], function () {
});
Route::view('patients', 'pasien.index')->name('patient.index');
Route::view('add', 'pasien.add')->name('patient.add');
Route::view('edit', 'pasien.edit')->name('patient.edit');
