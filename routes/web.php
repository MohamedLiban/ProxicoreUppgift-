<?php

use App\Livewire\Customers\CustomerForm;
use App\Livewire\Customers\CustomerList;
use App\Livewire\Customers\CustomerShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customers.index');
});

Route::get('/customers', CustomerList::class)
    ->name('customers.index');

Route::get('/customers/create', CustomerForm::class)
    ->name('customers.create');

Route::get('/customers/{customer}', CustomerForm::class)
    ->name('customers.edit');

Route::get('/customers/{customer}/show', CustomerShow::class)
    ->name('customers.show');