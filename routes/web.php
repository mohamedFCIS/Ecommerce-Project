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

////////////////////////////////////////////--Start Category--//////////////////////////////////////////
use App\Http\Controllers\backEnd\CategoriesController;
Route::namespace('backEnd')->prefix('admin')->group(function (){
    Route::get('create',[CategoriesController::class,'create'] );
    Route::post('create',[CategoriesController::class,'store'] );
    Route::get('category',[CategoriesController::class,'index'] );
    Route::get('category/{id}',[CategoriesController::class,'show'] );
    Route::get('category/{id}/edit',[CategoriesController::class,'edit'] );
    Route::post('category/{id}',[CategoriesController::class,'update'] );
    Route::get('category/{id}/delete',[CategoriesController::class,'destroy'] );

});



////////////////////////////////////////////--End Category--//////////////////////////////////////////

////////////////////////////////////////////--Start product--//////////////////////////////////////////
////////////////////////////////////////////--Start product--//////////////////////////////////////////
