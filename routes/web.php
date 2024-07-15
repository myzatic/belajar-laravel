<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    foreach(user::all() as $user) {
    dump($user->name);
    }
});