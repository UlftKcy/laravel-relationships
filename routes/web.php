<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
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

/*Route::get('/', function () {
    return view('category');
});*/
Route::get('/',[CategoryController::class,'index'])->name('index');
Route::post('/fetch-sub-categories',[CategoryController::class,'fetchSubCategories'])->name('fetch-sub-categories');
Route::post('/fetch-items',[CategoryController::class,'fetchItems'])->name('fetch-items');
