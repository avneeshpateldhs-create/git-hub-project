<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/git-practice', function () {
    return 'Git and Laravel practice started!';
});

Route::get('/git-status', function () {
    return 'My feature branch is working!';
});
