<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MedAppController;


Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

Route::post('login', [MedAppController::class,'login']);
Route::post('register', [MedAppController::class, 'register']);