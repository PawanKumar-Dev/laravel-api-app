<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApi;
use App\Http\Controllers\StudentApiController;

Route::get('dummyapi', [DummyApi::class, 'index']);

Route::get('getdata/{id}', [StudentApiController::class, 'index']);

Route::get('get/{id?}', [StudentApiController::class, 'getdata']);

Route::post('add', [StudentApiController::class, 'adddata']);

Route::put('update', [StudentApiController::class, 'updatedata']);

Route::delete('delete/{id}', [StudentApiController::class, 'deletedata']);

Route::get('search/{search}', [StudentApiController::class, 'searchdata']);
