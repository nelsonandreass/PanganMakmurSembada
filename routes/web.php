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

Route::get('/', 'Controller@index');
Route::get('/sendemail' , 'MailController@store');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth','IsAdmin'])->name('dashboard');

//Route::get('/dashboard', 'Controller@index')->middleware(['auth','IsAdmin'])->name('dashboard');

Route::middleware(['IsAdmin'])->group(function(){
    Route::get('/dashboard' , function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('/category' , CategoryController::class)->name('*','category');
    Route::resource('/product', ProductController::class)->name('*','product');
    Route::resource('/jumbotron', JumbotronController::class)->name('*','jumbotron');
    Route::resource('/faq', FaqController::class)->name('*','faq');
    Route::resource('/offer', OfferController::class)->name('*','offer');
    Route::resource('/gallery', GalleryController::class)->name('*','gallery');



    
});

require __DIR__.'/auth.php';
