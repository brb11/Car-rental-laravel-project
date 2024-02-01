<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\DesplayPages;
use App\Http\Controllers\Vihical_details;
use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|ph
*/

// Route::get('/', function () {
//     return view('Main Pages/index');
// });

Route::get('/',[Vihical_details::class,'index'])->name('index');
Route::get('include/footer',[CrudController::class,'showUsers']);
Route::get('frontend/pages/vehical-details/{vid}',[Vihical_details::class,'Vdetails'])->name('Vdetails');
Route::post('frontend/pages/vehical-details/',[BookingController::class,'create'])->name('BookingInsert');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
