<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
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
//Router front-end
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');

Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');

Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');

Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');

Route::get('/san-pham/{id}', 'FrontendController@productDetail')->name('frontend.productDetail');