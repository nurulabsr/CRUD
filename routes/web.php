<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/recyclebin', [PostController::class, 'RecyClyBin'])->name('post.recyclebin');
Route::get('post/restore/{id}', [PostController::class, 'Restore'])->name('post.restore');
Route::get('post/permanentlyDelete/{id}', [PostController::class, 'DeltePostPermanently'] )->name('post.permanentlyDelete');
Route::resource('post', PostController::class);
