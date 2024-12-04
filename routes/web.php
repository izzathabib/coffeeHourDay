<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('coffee/dashboard', 'dashboard')->name('dashboard');
Route::view('coffee/feedbackForm', 'feedback/feedbackForm')->name('feedbackForm');
Route::view('coffee/team-management', 'team-management')->name('team.management');
