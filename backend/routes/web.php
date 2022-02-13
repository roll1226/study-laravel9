<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
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
    return view('welcome');
})->name('home');

Route::get('/error-woops', function () {
    throw new \Exception('Woops');
});

Route::get('/test-str-helper', function () {
    // return str('hello world')->upper();
    // return str('hello world')->slug();
    return str('hello world')->append(' and everyone else.');
});

Route::get('/redirect', function () {
    return to_route('home');
});

Route::get('/blade', function () {
    return Blade::render('{{ $greeting }}, @if (true) World @else Folks @endif', ['greeting' => 'Hello']);
});

Route::controller(PostsController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::get('/posts/{post}', 'show');
    Route::post('/posts', 'store');
});

Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
    return $post;
})->scopeBindings();
