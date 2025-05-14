<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout-landing');
})->name('home');

Route::get('/tes', function () {
    return view('welcome');
})->name('tes');

Route::get('/super-admin', function () {
    return '<h1>hello super admin</h1>';
})->middleware(['auth', 'role:super_admin'])->name('super_admin');
Route::get('/admin', function () {
    return '<h1>hello admin</h1>';
})->middleware(['auth', 'role:admin'])->name('admin');
