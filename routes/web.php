<?php

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

Route::get("/test" , function(){
    die("Success");
});
Route::get('/', 'Controller@index');
Route::get('/sendemail' , 'SendEmailController@store');
Route::get('/linktree','LinkTreeController@index');
Route::get('/leobunseno','LinkTreeController@index');
Route::get('/ricemart','LinkTreeController@index');
Route::get('/steven','LinkTreeController@index');
Route::get('/willinathanael','LinkTreeController@index');

Route::get("clear-cache", function () {
    /* php artisan cache:clear */
    \Artisan::call('cache:clear');

    dd('Application cache cleared successfully.');
});

Route::get("clear-views", function () {
    /* php artisan view:clear */
    \Artisan::call('view:clear');

    dd('Compiled views cleared successfully.');
});

Route::get('/clearcache', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    die("success");
});



Route::middleware(['IsAdmin'])->group(function(){
    Route::get('/dashboard' , "DashboardController@index")->name('dashboard');
    Route::resource('/category' , CategoryController::class)->name('*','category');
    Route::resource('/product', ProductController::class)->name('*','product');
    Route::resource('/jumbotron', JumbotronController::class)->name('*','jumbotron');
    Route::resource('/faq', FaqController::class)->name('*','faq');
    Route::resource('/offer', OfferController::class)->name('*','offer');
    Route::resource('/gallery', GalleryController::class)->name('*','gallery');
    Route::resource('/artikel', ArtikelController::class)->name('*','artikel');
    Route::resource('/store', StoreController::class)->name('*','store');
    Route::resource('/saran', SaranController::class)->name('*','saran');
});

require __DIR__.'/auth.php';
