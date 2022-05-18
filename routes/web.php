<?php

declare(strict_types=1);

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/', 'HomeController@index')->name('homepage');

Route::prefix('auth')->group(function () {
    Route::get('login', 'HomeController@login')->name('auth.formlogin');
    Route::post('login', 'HomeController@post_login')->name('post.formlogin');
    Route::get('register', 'HomeController@register')->name('auth.formregister');
    Route::post('register', 'HomeController@post_register')->name('post.formregister');
    Route::get('logout', 'HomeController@logout')->name('auth.logout');
    Route::get('personalpage', 'HomeController@personalpage')->name('auth.personalpage');
});

Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');

// Route::group(['middleware' => 'locale'], function() {
//     Route::get('change-language/{language}', 'HomeController@changeLanguage')
//         ->name('user.change-language');
// });

Route::prefix('carts')->group(function () {
    Route::get('cart-details', function () {
        return view('frontend/products/shoppingcart');
    })->name('cart-details.cart');
});

Route::get('/search', 'HomeController@search');
Route::post('/search', 'HomeController@searchFullText')->name('search');

Route::get('product/{id}', 'ProductController@show')->name('product.show');

Route::namespace('Backend')->middleware('auth')->prefix('backend')->group(function (): void {
    Route::resource('brand', 'BrandController', ['as' => 'backend']);
    Route::resource('media', 'MediaController', ['as' => 'backend'])->only('destroy');
    Route::resource('product', 'ProductController', ['as' => 'backend']);
    Route::get('product/{productId}/media', 'ProductController@media')->name('backend.product.media');
    Route::post('product/{productId}/assign-media', 'MediaController@assignToProduct')->name('backend.assign.media');
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login-gg');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
