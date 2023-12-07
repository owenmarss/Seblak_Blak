<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
Route::middleware(['Admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'goToDashboard']);
    
    
    Route::post('/logout', [AuthController::class, 'logOut']);
});

// Route::get('/login', function () {
//     return view('login.login'); 
// });

Route::get('/login', [AuthController::class, 'goToLogin']);
Route::post('/login/auth', [AuthController::class, 'authenticate']);