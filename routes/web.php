<?php

use App\Http\Controllers\CrudController;
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

Route::get('/',[CrudController::class,'show']);
Route::get('include/footer',[CrudController::class,'showUsers']);


// Route::get('/', function () {
//     return view('frontend/layout/app');
// });
