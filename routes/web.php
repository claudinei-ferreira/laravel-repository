<?php

use Illuminate\Support\Facades\Route;

/** Admin */
use App\Http\Controllers\Admin\{
    ReportsController,
    UserController,
    ProductController,
    CategoryController,
    MeController,
    DashboardController,

};


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


Route::prefix('admin')->as('admin.')
    //->middleware('auth')
    ->group(function () {

    // Reports
    Route::get('reports/vue', [ReportsController::class, 'vue'])->name('reports.vue');    
    Route::get('reports/years', [ReportsController::class, 'year'])->name('reports.year');    
    Route::get('reports/months', [ReportsController::class, 'months'])->name('reports.months');    
   
    // Users
    Route::any('users/search', [UserController::class, 'search'])->name('users.search');
    Route::resource('users', UserController::class);
    
    // Products
    Route::any('products/search', [ProductController::class, 'search'])->name('products.search');
    Route::resource('products', ProductController::class);

    // Categorias
    Route::any('categories/search', [CategoryController::class, 'search'])->name('categories.search');
    Route::resource('categories', CategoryController::class);
    
    // My Account
    Route::get('me', [MeController::class, 'index'])->name('me');    
    Route::put('me', [MeController::class, 'update'])->name('updateMe');     

    // Dashboard: Home
    Route::get('/', [DashboardController::class, 'index'])->name('index');    

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
