<?php

use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Livewire\SearchBar;


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
//==================================== Front =================================================//

Route::get('/', FrontHomeController::class . '@index')->name('home.index');

Route::get('contact/{id}', [FrontHomeController::class, 'showContact'])->name('front.contact.show');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('/login', [AuthController::class, 'dologin'])->name('auth.login');

Route::get('/signin', [RegistrationController::class, 'signin'])->name('signin');

Route::get('/contacts', [FrontContactController::class, 'index'])->name('front.contacts');

Route::delete('/contact/{id}', [FrontContactController::class, 'destroy'])->name('front.contact.destroy');

Route::get('/contact/edit/{id}', [FrontContactController::class, 'edit'])->name('contact.edit');

Route::post('/contact', [FrontContactController::class,'store'])->name('contact.store');

// Route::get('/contact/create', [FrontContactController::class, 'create'])->name('contact.create');






//================================== Admin =============================================//


Route::get('admin/', AdminHomeController::class . '@index')->name('admin.index');



Route::get('admin/contact', AdminContactController::class . '@index')->name('admin.contact.index');

Route::get('admin/contact/show/{id}', AdminContactController::class . '@show')->name('admin.show');

Route::get('admin/contact/create', AdminContactController::class . '@create')->name('admin.create');

Route::get('admin/contact/edit/{id}', AdminContactController::class . '@edit')->name('admin.edit');

Route::post('/admin/contact', AdminContactController::class .'@store')->name('admin.store');

Route::put('/admin/contact/{id}', AdminContactController::class .'@update')->name('admin.update');

Route::delete('/admin/contact/{id}', AdminContactController::class .'@destroy')->name('admin.destroy');
















