<?php

use App\Http\Controllers\PageController;
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

Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');

Route::get('/corsiDisponibili', [PageController::class, 'corsiDisponibili'])->name('corsiDisponibili');

Route::get('/dettagliCorso/{name}', [PageController::class, 'dettagliCorso'])->name('dettagliCorso');

Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');

Route::post('/send', [PageController::class, 'send'])->name('send');

Route::get('send.email', [PageController::class, 'email'])->name('email');
