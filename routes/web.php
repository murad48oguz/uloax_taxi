<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('homePage');

Route::group(['middleware'=>'notLogin'], function(){

    Route::get('/taxi_order',[OrderController::class,'taxi_order'])->name('taxi_order');
    Route::get('/welcome',function(){
        return view('welcome')->name('welcome');
    });

});



Route::group(['middleware'=>'isLogin'], function(){

   Route::get('/login');
   Route::get('/register');

});


Route::post('/order_result', [OrderController::class, 'order_result'])->name('order_result');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
