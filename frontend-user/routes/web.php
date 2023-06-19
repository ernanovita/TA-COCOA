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
    $client = new Client();

    $url = env("APP_SERVER") . "/api/kelas";
    $request = $client->get($url);
    $response = $request->getBody();

    $url_absen = env("APP_SERVER") . "/api/absen";
    $request_absen = $client->get($url_absen);
    $response_absen = $request_absen->getBody();

    $data = [
        'url' => env("APP_SERVER"),
        'response' => json_decode($response),
        'absen' => json_decode($response_absen)
    ];

    return view('dashboard', $data);
});
