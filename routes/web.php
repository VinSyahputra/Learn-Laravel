<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'data' => 'Lorem Ipsum Dolor Sit Amet'
    ]);
});

Route::get('/test', function () {
    return view('test', [
        'title' => 'Test',
        'data' => 'lorem ipsum',
        'name' => 'john doe'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'data' => 'lorem ipsum',
        'name' => 'john doe'
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);
