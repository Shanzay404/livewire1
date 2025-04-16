<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::view("search", "search-box");

Route::view('livewire.search-box', 'search');
