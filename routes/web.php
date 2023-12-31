<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController; 
use App\Http\Controllers\UserController; 
use App\Models\Teams;

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
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
        return redirect('/login');
    }
})->name('logout'); 

// register route

Route::get('/register', [UserController::class, 'register'])->name('register');  
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

// teams route

Route::get('/viewTeams',  [TeamsController::class, 'viewTeams']); 

// delete team route

Route::delete('/deleteTeam/{id}', [TeamsController::class, 'deleteTeam']);

// add team route

Route::get('/addTeam', function(){
    return view('addTeam');
});

// edit team route

Route::get('/editTeam/{id}', [TeamsController::class, 'editTeam']); 
Route::post('/updateTeam/{id}', [TeamsController::class, 'updateTeam'])->name('updateTeam');

Route::post('/saveTeams', [TeamsController::class, 'saveTeams'])->name('saveTeams');

// players route 

Route::get('/viewPlayers/{team_id}', [PlayersController::class, 'viewPlayers']); 

// delete player route

Route::delete('/deletePlayer/{id}', [PlayersController::class, 'deletePlayer']);

// add player route

Route::get('/addPlayer', function(){ 
    $teams = Teams::where('active', 1)->get();
    return view('addPlayer', ['teams' => $teams]);
});

// edit player route

Route::get('/editPlayer/{id}', [PlayersController::class, 'editPlayer']);
Route::post('/updatePlayer/{id}', [PlayersController::class, 'updatePlayer'])->name('updatePlayer');
Route::post('/savePlayers', [PlayersController::class, 'savePlayers'])->name('savePlayers'); 








