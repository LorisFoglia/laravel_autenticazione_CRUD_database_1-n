<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', [AlbumController::class, 'index'])->name('album.index');

Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');

Route::post('/album/store', [AlbumController::class, 'store'])->name('album.store');

Route::get('/album/search', [AlbumController::class, 'search'])->name('album.search');

Route::get('/album/show/{album}', [AlbumController::class, 'show'])->name('album.show');

Route::get('/album/edit/{album}', [AlbumController::class, 'edit'])->name('album.edit');

Route::put('/album/update/{album}', [AlbumController::class, 'update'])->name('album.update');

Route::delete('/album/delete/{album}', [AlbumController::class, 'delete'])->name('album.delete');

Route::get('/user', [UserController::class, 'user'])->name('user.profile');
