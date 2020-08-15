<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/testgame', 'GameController@index')->name('game.index');
// Route::post('/testgame', 'GameController@process')->name('game.action');

Route::resource('/newgame', 'NewgameController');
Route::post('/newgame/game', 'NewgameController@sizetable')->name('newgame');
Route::any('/newgame/game/ChkProcess', 'NewgameController@process');
