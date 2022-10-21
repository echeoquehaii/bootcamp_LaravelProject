<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\serviziController;

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

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');
Route::get('/servizi', [serviziController::class, 'servizi'])->name('servizi');
Route::get('/contattaci', [HomepageController::class, 'contattaci'])->name('contattaci');

Route::post('/form', [HomepageController::class, 'form'])->name('form');

