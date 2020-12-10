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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('frontEnd.layouts.index');
});
//Route::get('admin/home', function () {
//    return view('backEnd.layouts.index');
//});
use App\Http\Controllers\backEnd\homeController;
Route::namespace('backEnd')->prefix('admin')->group(function (){
        Route::get('',[homeController::class,'index'] );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
