<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\ArchiveController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

//liste routes
Route::resource('liste' , ListeController::class);
Route::get('edit/{id}','ListeController@edit');
Route::post('update/{id}','ListeController@update');

Route::resource('archive' , ArchiveController::class);

Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);





