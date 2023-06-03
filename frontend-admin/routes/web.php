<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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
    return view('login', ['url' => env('APP_SERVER')]);
});

Route::get('dashboard', function () {
    return view('dashboard', ['url' => env('APP_SERVER')]);
});

Route::get('kelas', function () {
    $url = env("APP_SERVER") . "/api/kelas";
    $client = new Client();
    $request = $client->get($url);
    $response = $request->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response)
    ];

    return view('kelas', $data);
});

Route::get('mapel', function () {
    $url = env("APP_SERVER") . "/api/mapel";
    $client = new Client();
    $request = $client->get($url);
    $response = $request->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response)
    ];

    return view('mapel', $data);
});

Route::get('guru', function () {
    $client = new Client();

    $url = env("APP_SERVER") . "/api/guru";
    $request = $client->get($url);
    $response = $request->getBody();

    $url_mapel = env("APP_SERVER") . "/api/mapel";
    $request_mapel = $client->get($url_mapel);
    $response_mapel = $request_mapel->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response),
        'response_mapel' => json_decode($response_mapel)
    ];

    return view('guru', $data);
});

Route::get('admin_sekolah', function () {
    $client = new Client();
    $url = env("APP_SERVER") . "/api/admin";
    $request = $client->get($url);
    $response = $request->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response)
    ];

    return view('admin', $data);
});

Route::get('absen', function () {
    $client = new Client();
    $url = env("APP_SERVER") . "/api/absen";
    $request = $client->get($url);
    $response = $request->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response)
    ];

    return view('list_absen', $data);
});
