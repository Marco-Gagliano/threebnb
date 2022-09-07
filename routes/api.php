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

Route::namespace('Api')
    ->prefix('apartments')
    ->group(function(){
    Route::get('/', 'PageController@getApartments');
    Route::get('/paginate', 'PageController@getApartmentsPaginate');
    Route::get('/sponsoredPaginate', 'PageController@getSponsoredApartmentsPaginate');
    Route::get('/services', 'PageController@getServices');
    Route::get('/apartment-details/{id}', 'PageController@show');
    Route::get('/filteredApartments/{rooms}/{beds}/{distance}/{lat}/{lon}/{servicesList}/{sponsored}', 'PageController@apartmentsWithFilters');

    Route::get('/sponsored', 'PageController@sponsoredApartments');
});
