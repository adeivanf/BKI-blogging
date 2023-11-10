<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'landing');

// Route::get('/about', function () {
//     $title = 'About Us';
//     $description = 'Blogging is website for sharing your thoughts and ideas about Islamic Guidance and Counselling in the world.';
//     $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';
//     return view('about', compact('title', 'description', 'button'));
// });

Route::get('/about', [AboutController::class, 'index']);

Route::get('/', LandingController::class);
