<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;





Route::get('/', function () {
    return view('user.create');
});

/* Route::get('/', [UsersController::class, 'index']); */
Route::get('jquery-validation', [UsersController::class, 'index']);
Route::resource('user', UsersController::class);

