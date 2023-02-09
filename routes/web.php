<?php

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::delete('/cart/delete/{id}', [HomeController::class, 'destroyCart']);
Route::post('/addcart', [HomeController::class, 'addCart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::patch('/profile/update', [HomeController::class, 'updateProfile']);
Route::get('/saved', [HomeController::class, 'saved']);

Route::middleware(['auth', 'role:2'])->group(function () {

    Route::get('/account_maintenance', [HomeController::class, 'accMaintenance']);
    Route::get('/account_maintenance/role/{id}', [HomeController::class, 'accRole']);
    Route::patch('/account_maintenance/role/update', [HomeController::class, 'updateRole']);
    Route::delete('/account/delete/{id}', [HomeController::class, 'destroyUser']);

});
