<?php

#use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

Route::get('/', [PageControllers::class, 'index']);
 
Route::get('/about', [PageControllers::class, 'about']);

Route::get('/devices', [PageControllers::class, 'devices']);

Route::get('/FAQ', [PageControllers::class, 'FAQ']);

Route::get('/login', [PageControllers::class, 'login']);

