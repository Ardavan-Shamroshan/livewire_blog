<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Index\Index;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Search\Search;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Article\Article;

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
});

/*
|--------------------------------------------------------------------------
| livewire blog
|--------------------------------------------------------------------------
|
*/
Route::prefix('blog')->group(function () {
    Route::get('/', Index::class)->name('blog');
    Route::get('/article/{article}', Article::class)->name('blog.article');
    Route::get('/search/{category?}/{search?}', Search::class)->name('blog.search');
});

Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('/register', Register::class)->name('auth.register');
    Route::get('/login', Login::class)->name('auth.login');
});
