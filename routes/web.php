<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\champions;
use App\http\Controllers\myviews;


Route::get('/', [champions::class, 'home_inicio']) ->name('home_inicio');
route::get('/index', [myviews::class, 'home_inicio']) ->name('home_inicio');
    return view('welcome');

