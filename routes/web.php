<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backEnd\homeController;
use App\Http\Controllers\backEnd\usersController;

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


Route::group(['middleware'=>'auth:web'],function(){

    Route::get('/home', function () {
        return view('frontEnd.layouts.index');
    });
});









Route::group(['middleware'=>'auth','namespace'=>'backEnd','prefix'=>'admin'],function(){
//write all route backend here
    Route::get('home',[homeController::class,'index'] );


});



// Route::get('admin/home', function () {
//    return view('backEnd.layouts.index');
// });
// Route::namespace('backEnd')->prefix('admin')->group(function (){
//         Route::get('',[homeController::class,'index'] );
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


########################################  users#####################################
// Route::resource('users',[usersController::class,'index']);
Route::resource('/users', usersController::class );



