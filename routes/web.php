<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backendThemeController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontendTheme.index');

});

//admin end middleware
Route::get('product/details/{id}',[IndexController::class,'ProductDetails']);

//Route::get('/home', function () {
//    return view('backendTheme.home');
//
//});



Route::middleware('auth')->group(function () {
Route::resource('products', ProductController::class);
Route::get('product/inactive/{id}',[ProductController::class,'ProductInactive'])->name('product.inactive');
    Route::get('product/active/{id}',[ProductController::class,'ProductActive'])->name('product.active');
});

// admin route
Route::middleware('auth')->group(function () {
Route::get('/backendTheme/logout',
[backendThemeController::class, 'destroy'])->name('backendTheme.logout');

});

Route::get('/dashboard', function () {
    return view('backendTheme.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
