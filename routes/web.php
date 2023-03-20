<?php

use App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', User::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 /// Le groupe des routes relative aux administration uniq
 Route::group([
    'middleware' => ['auth', 'auth.superadmin'],
    'as' => 'superadmin.'
    ],function(){
        Route::group([
            'prefix' => 'habilitations',
            'as' => 'habilitations.',
            ], function(){
                Route::get('/utilisateurs', User::class)->name('users.index')->middleware('auth.superadmin');
            });
    });
//Route::get('/habilitations/utilisateurs', [App\Http\Controllers\UserController::class,'index'])
//        ->name('utilisateurs')
//        ->middleware('auth.superadmin');
//
