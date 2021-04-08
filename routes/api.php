<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;
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
Route::post('/car_model', [apicontroller::class,"save"]);
Route::put('/car1_update/{id}', [apicontroller::class,'car_update']);
Route::delete('/delete_car/{id}',[apicontroller::class,'delete_by_id']);
Route::get('/car_model',[apicontroller::class,'getcar']);
Route::get('/getd/{id}',[apicontroller::class,'getById']);