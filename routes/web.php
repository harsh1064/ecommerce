<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});*/
Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard',[HomeController::class,'login_home'])
->middleware(['auth','verified'])->name('dashboard');

Route::get('/myorders',[HomeController::class,'myorders'])
->middleware(['auth','verified']);

/*Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
Route::get('admin/dashboard',[HomeController::class,'index']);
//Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

Route::get('view_category',[AdminController::class,'view_category']);
Route::post('add_category',[AdminController::class,'add_category']);
Route::get('delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('edit_category/{id}',[AdminController::class,'edit_category']);
Route::post('update_category/{id}',[AdminController::class,'update_category']);

Route::get('add_product',[AdminController::class,'add_product']);
Route::post('upload_product',[AdminController::class,'upload_product']);
Route::get('view_product',[AdminController::class,'view_product']);
Route::get('delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('update_product/{id}',[AdminController::class,'update_product']);
Route::post('edit_product/{id}',[AdminController::class,'edit_product']);
Route::get('product_search',[AdminController::class,'product_search']);

Route::get('product_details/{id}',[HomeController::class,'product_details']);
Route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware(['auth','verified']);
Route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth','verified']);
Route::get('remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::post('confirm_order',[HomeController::class,'confirm_order']);

Route::get('view_orders',[AdminController::class,'view_order']);
Route::get('on_the_way/{id}',[AdminController::class,'on_the_way']);
Route::get('delivered/{id}',[AdminController::class,'delivered']);
Route::get('print_pdf/{id}',[AdminController::class,'print_pdf']);

Route::get('shop',[HomeController::class,'shop']);
Route::get('why',[HomeController::class,'why']);
Route::get('testimonial',[HomeController::class,'testimonial']);
Route::get('contact',[HomeController::class,'contact']);