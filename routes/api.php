<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;

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

Route::get('delivery-fee', 'MenuController@fee');
Route::get('menu', 'MenuController@index');
Route::post('order', 'OrderController@create');
Route::get('order/{ticketNumber}', 'OrderController@getByTicket');
