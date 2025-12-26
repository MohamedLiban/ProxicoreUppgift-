<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Livewire\Test;

Route::get('/test', Test::class);
