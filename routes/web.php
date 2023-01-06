<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\session;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $Request) {
    $data = array();
    if(session::has('loginId')){
        $data = Users::where('name', '=', $Request->name)->first();
    }
    return view('welcome', compact('data'));
})->name('home');

route::get('/register', [AuthController::class, 'registerShow'])->name('registerShow');
route::post('/register', [AuthController::class, 'register'])->name('register');

route::get('/login', [AuthController::class, 'loginShow'])->name('loginShow');
route::post('/login', [AuthController::class, 'login'])->name('login');

route::get('/logout', [AuthController::class, 'logout']);

route::get('/profile', [AuthController::class, 'profileShow'])->name('profileShow');
route::post('/profile', [AuthController::class, 'profile'])->name('profile');
