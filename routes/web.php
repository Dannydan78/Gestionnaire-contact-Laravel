<?php

use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminHomeController;
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
    return view('welcome');
});


//================================== Admin =============================================//
Route::get('admin/', AdminHomeController::class . '@index')->name('admin.index');



Route::get('admin/contact', AdminContactController::class . '@index')->name('admin.contact.index');

Route::get('admin/contact/show/{id}', AdminContactController::class . '@show')->name('admin.show');

Route::get('admin/contact/create', AdminContactController::class . '@create')->name('admin.create');

Route::get('admin/contact/edit/{id}', AdminContactController::class . '@edit')->name('admin.edit');

Route::post('/admin/contact', AdminContactController::class .'@store')->name('admin.store');

Route::put('/admin/contact/{id}', AdminContactController::class .'@update')->name('admin.update');

Route::delete('/admin/contact/{id}', AdminContactController::class .'@destroy')->name('admin.destroy');













