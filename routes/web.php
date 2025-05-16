<?php
use Illuminate\Support\Facades\Route;

// Main view route
Route::get('/view/helloworld', function () {
    return view('helloworld::app');
})->name('helloworld.index');