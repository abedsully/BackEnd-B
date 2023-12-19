<?php

use App\Http\Controllers\BukuController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::get('/dashboard', [BukuController::class, 'show']);
Route::get('/add-buku', [BukuController::class, 'create']);
Route::post('/store-book', [BukuController::class, 'store']);
Route::get('/detail-buku/{id}', [BukuController::class, 'showDetail']);
Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);
Route::patch('/update-buku/{id}', [BukuController::class, 'update']);
Route::delete('/delete-buku/{id}', [BukuController::class, 'destroy']);

