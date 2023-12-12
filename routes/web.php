<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController; 
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// login route 
Route::get('/login', function () {
    return view('login');
})->name('login');  
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// register route

Route::get('/register', [UserController::class, 'register'])->name('register');  
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

// teams route

Route::get('/viewTeams',  [TeamsController::class, 'viewTeams']); 
Route::get('/viewPlayers/{team_id}', [PlayersController::class, 'viewPlayers']); 


