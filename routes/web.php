<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollenUnitResultController;
use App\Http\Controllers\SumTotalResultController;
use App\Http\Controllers\PartyController;
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
    return view('welcome');
});

 
    Route::group(['prefix' => 'answers'], function () {
        Route::resource('question_1', PollenUnitResultController::class); 
       
       
     
    });

    Route::group(['prefix' => 'answers'], function () {

        Route::resource('question_2', SumTotalResultController::class);

        Route::get('/question_2/show', 'SumTotalResultController@show')->name('show-results');
     
    });


    Route::group(['prefix' => 'answers'], function () {

        Route::resource('question_3', PartyController::class);
       
    

     
    });
    
    