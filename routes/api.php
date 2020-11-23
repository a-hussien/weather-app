<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weather', function () {
    $apiKey = config('services.weatherapi.key');
    $city   = Request('city');
   
    $response = Http::get("https://api.weatherapi.com/v1/forecast.json?key=$apiKey&q=$city&days=5");
    
    return $response->json();
});

Route::get('/getcityfromip', function () {
    $response = Http::get("http://ip-api.com/json");
    return $response->json();
});

