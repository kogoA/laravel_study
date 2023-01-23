<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;
use App\Http\Controllers\User\ItemController;


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
//     return view('user.welcome');
// });

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users', 'verified'])->name('dashboard');

Route::middleware('auth:users')->group(function(){
    Route::get('/', [itemController::class, 'index'])->name('items.index');
    // Route::get('edit/{shop}',[ShopController::class, 'edit'])->name('shops.edit');
    // Route::post('update/{shop}',[ShopController::class, 'update'])->name('shops.update');
});

require __DIR__.'/auth.php';
