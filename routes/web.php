<?php

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/page/{page}', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');




Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/print', [App\Http\Controllers\ProfileController::class, 'print'])->name('profile.print');


Route::post('/avatar', [App\Http\Controllers\UserController::class, 'avatar'])->name('avatar');

Route::prefix('admin')->group(function () {
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/export', [App\Http\Controllers\UserController::class, 'export'])->name('users.export');
    
});
