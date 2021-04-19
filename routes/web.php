<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArticalController::class, 'index'])->name('artical');
Route::get('/artical', [ArticalController::class, 'index'])->name('artical');
Route::get('/add_artical', [ArticalController::class, 'add_artical'])->name('add_artical');
Route::post('/store-artical', [ArticalController::class, 'store_artical'])->name('store_artical');
Route::get('/edit_artical/{articalId}', [ArticalController::class, 'edit_artical'])->name('edit_artical');
Route::post('/update-artical', [ArticalController::class, 'update_artical'])->name('update_artical');