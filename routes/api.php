<?php
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MtkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//mahasiswa
//  Route::get('mahasiswas', 'MhsController@index');
Route::get('/mahasiswas', [MhsController::class, 'index']);
Route::post('/mahasiswas/create', [MhsController::class, 'store']);


//matakuliah
Route::get('/matakuliahs', [MtkController::class, 'index']);
Route::post('/matakuliahs/create', [MtkController::class, 'store']);



