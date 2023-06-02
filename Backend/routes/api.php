<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mapel;
use App\Http\Controllers\Kelas;
use App\Http\Controllers\Guru;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Absen;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* MAPEL */
Route::post('mapel', [Mapel::class, '_create']);
Route::get('mapel', [Mapel::class, '_read']);
Route::delete('mapel/{parameter}', [Mapel::class, '_delete']);
Route::post('mapel_update', [Mapel::class, '_update']);

/* KELAS */
Route::post('kelas', [Kelas::class, '_create']);
Route::get('kelas', [Kelas::class, '_read']);
Route::delete('kelas/{parameter}', [Kelas::class, '_delete']);
Route::post('kelas_update', [Kelas::class, '_update']);

/* GURU */
Route::post('login_guru', [Guru::class, '_login']);
Route::post('guru', [Guru::class, '_create']);
Route::get('guru', [Guru::class, '_read']);
Route::delete('guru/{parameter}', [Guru::class, '_delete']);
Route::post('guru_update', [Guru::class, '_update']);

/* ADMIN */
Route::post('login_admin', [Admin::class, '_login']);
Route::post('admin', [Admin::class, '_create']);
Route::get('admin', [Admin::class, '_read']);
Route::delete('admin/{parameter}', [Admin::class, '_delete']);
Route::post('admin_update', [Admin::class, '_update']);

/* ABSEN */
Route::post('absen', [Absen::class, '_create']);
Route::get('absen', [Absen::class, '_read']);
Route::delete('absen/{parameter}', [Absen::class, '_delete']);