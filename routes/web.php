<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicePagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(PagesController::class)->group(function () {

  Route::get('/', 'index');
});

//MainPagesController

Route::controller(MainPagesController::class)->group(function () {
  Route::get('/admin/dashboard',  'dashboard');
  Route::get('/admin/main', 'index');
  Route::put('admin/main', 'update')->name('admin.main.update');
});

// conct controller
Route::controller(ContactController::class)->group(function () {

  Route::post('admin/contact/store', 'store');
  Route::get('admin/contact/list', 'list');
  Route::get('/admin/contact', 'index');
  Route::put('admin/contact', 'update')->name('admin.contact.update');


});
//ServicePagesController

Route::controller(ServicePagesController::class)->group(function () {

  Route::get('/admin/service/create', 'create');
  Route::post('/admin/service/store', 'store');
  Route::get('admin/service/list', 'list');
  Route::get('admin/service/edit/{id}', 'edit');
  Route::post('admin/service/update/{id}', 'update');
  Route::get('admin/service/delete/{id}', 'destroy');
});
//PortfolioController

Route::controller(PortfolioController::class)->prefix('admin')->group(function () {

  Route::get('/portfolio/create', 'create');
  Route::put('/portfolio/store', 'store');
  Route::get('/portfolio/list', 'list');
  Route::get('/portfolio/edit/{id}', 'edit');
  Route::post('/portfolio/update/{id}', 'update');
  Route::get('/portfolio/delete/{id}', 'destroy');
});
//PortfolioController

Route::controller(AboutController::class)->prefix('admin')->group(function () {

  Route::get('/about/create', 'create');
  Route::put('/about/store', 'store');
  Route::get('/about/list', 'list');
  Route::get('/about/edit/{id}', 'edit');
  Route::post('/about/update/{id}', 'update');
  Route::get('/about/delete/{id}', 'destroy');
});


//Frontend controller
Route::controller(FrontendController::class)->group(function () {

  Route::get('portfolio/service', 'service');
  Route::get('portfolio/project', 'portfolio');
  Route::get('portfolio/about', 'about');
  Route::get('portfolio/contact', 'contact');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
