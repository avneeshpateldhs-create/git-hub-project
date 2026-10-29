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

Route::get('/dummy', function () {
    return 'This is a dummy route';
});

Route::get('/dummy-api', function () {
    return response()->json([
        'status' => true,
        'message' => 'Dummy API working',
        'data' => [
            'id' => 1,
            'name' => 'Test User'
        ]
    ]);
});
