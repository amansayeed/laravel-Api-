<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getcountry','Api\countryController@getCounty');
Route::get('getcountrybyid/{id}','Api\countryController@getCountryById');
Route::post('savecountrydata','Api\countryController@saveCountydata');
Route::put('editcountrydata/{country}','Api\countryController@editCountrydata');
Route::delete('deletecountrydata/{country}','Api\countryController@deleteCountrydata');