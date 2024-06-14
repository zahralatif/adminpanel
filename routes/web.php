<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('topics', 'TopicController');
Route::post('/topics/{topic}/replies', 'ReplyController@store')->name('replies.store');
Route::get('/topics/{topic}/replies/{reply}/edit', 'ReplyController@edit')->name('replies.edit');
Route::put('/topics/{topic}/replies/{reply}', 'ReplyController@update')->name('replies.update');
Route::delete('/topics/{topic}/replies/{reply}', 'ReplyController@destroy')->name('replies.destroy');
