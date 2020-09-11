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
// get data without id
Route::get('getcountry', 'Api\countryController@getCounty');
//get data with id.
Route::get('getcountrybyid/{id}', 'Api\countryController@getCountryById');
//save data in table
Route::post('savecountrydata', 'Api\countryController@saveCountydata');
//edit data in the table
Route::put('editcountrydata/{id}', 'Api\countryController@editCountrydata');
//delete recods in the table
Route::delete('deletecountrydata/{id}', 'Api\countryController@deleteCountrydata');


//downloading the file 
Route::get("file/getcountry","Api\countryController@filedownload");
//uploading the file via api 
Route::post("file/postdata","Api\countryController@fileupload");
