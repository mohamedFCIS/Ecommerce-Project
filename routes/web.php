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




    Route::get('/home', function () {
        return view('frontEnd.layouts.index');
    })->name("home");






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

Route::group(['middleware' => 'auth'], function () {


Route::get('admin/home', [homeController::class, 'index']);


    Route::group(["middleware" => 'chechAdmin'], function () {


    });
});
Route::get('notfound', function () {
    return view('notfound');
})->name('notfound');

Route::resource('admin/users', usersController::class);

////////////////////////////////////////////--Start Category--//////////////////////////////////////////
use App\Http\Controllers\backEnd\CategoriesController;
Route::prefix('admin')->group(function (){
    Route::get('category/create',[CategoriesController::class,'create'] );
    Route::post('category/create',[CategoriesController::class,'store'] );
    Route::get('category',[CategoriesController::class,'index'] );
    Route::get('category/{id}',[CategoriesController::class,'show'] );
    Route::get('category/{id}/edit',[CategoriesController::class,'edit'] );
    Route::post('category/{id}',[CategoriesController::class,'update'] );
    Route::get('category/{id}/delete',[CategoriesController::class,'destroy'] );

});
////////////////////////////////////////////--End Category--//////////////////////////////////////////

////////////////////////////////////////////--Start product--//////////////////////////////////////////
use App\Http\Controllers\backEnd\ProductsController;
Route::namespace('backEnd')->prefix('admin')->group(function (){
    Route::get('product/create',[ProductsController::class,'create'] );
    Route::post('product/create',[ProductsController::class,'store'] );
    Route::get('product',[ProductsController::class,'index'] );
    Route::get('product/{id}',[ProductsController::class,'show'] );
    Route::get('product/{id}/edit',[ProductsController::class,'edit'] );
    Route::post('product/{id}',[ProductsController::class,'update'] );
    Route::get('product/{id}/delete',[ProductsController::class,'destroy'] );
    Route::get('trashed',[ProductsController::class,'trashed'] );
    Route::get('trashed/{id}',[ProductsController::class,'restore'] );


});
////////////////////////////////////////////--Start product--//////////////////////////////////////////
