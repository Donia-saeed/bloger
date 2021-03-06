<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Support\Facades\Auth;

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

Route::resource('home','BlogController');
Route::get('/blog/{blog}','BlogController@show');
Route::resource('catagory','CatagoryController');
Route::get('/','BlogController@index');
Route::get('/logout','BlogController@logout');

Auth::routes();
