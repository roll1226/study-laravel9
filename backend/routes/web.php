<?php

use App\Enums\PostState;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PostController::class, 'showHome'])->name('home');

Route::get('/new', function () {
    return view('new');
})->name('new');

Route::get('/user/{user}', function (User $user) {
    return view('user.index', ['username' => $user->name]);
})->middleware('auth');

Route::get('/post/{post}', [PostController::class, 'showPost']);

// 勉強用ルート
Route::get('/woops', function () {
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

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::get('/posts/{post}', 'show');
    Route::post('/posts', 'store');
});

Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
    return $post;
})->scopeBindings();

Route::get('/enum/{state}', function (PostState $state) {
    // $post = new Post;
    // $post->user_id = 1;
    // $post->title = 'My title';
    // $post->body = 'My body';
    // $post->state = PostState::Draft;
    // $post->save();
    // return 'Down';


    // $post = Post::inRandomOrder()->first();
    // if ($post->state === PostState::Draft) {
    //     return 'It is a draft.';
    // } else {
    //     return 'It is not a draft.';
    // }


    dd($state);
});

Route::get('/test/posts/{post}', function (Post $post) {
    return $post;
})->name('posts.show');
