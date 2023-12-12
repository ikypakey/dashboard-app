<?php

use App\Http\Controllers\BackgroundController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/background', [BackgroundController::class, 'index'])->name('background');

Route::get('/background-get', [BackgroundController::class, 'get_backgrounds'])->name('get_background');

Route::get('/background-get-dropdown', [BackgroundController::class, 'get_background_dropdown'])->name('get_background_dropdown');

Route::post('/background-create', [BackgroundController::class, 'create_background'])->name('create_background');

Route::get('/background-get-one', [BackgroundController::class, 'get_one_background'])->name('get_one_background');

Route::get('/background-get-active', [BackgroundController::class, 'get_active_background'])->name('get_active_background');

Route::put('/background-update', [BackgroundController::class, 'update_background'])->name('update_background');

Route::put('/background-set', [BackgroundController::class, 'set_background'])->name('set_background');

Route::delete('/background-delete', [BackgroundController::class, 'delete_background'])->name('delete_background');

