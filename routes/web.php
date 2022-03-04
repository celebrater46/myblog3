<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', 'PostController@index');
//Route::get('/', 'App\Http\Controllers\PostController@index');
//Route::get('/', [PostController::class, 'index']);
//Route::get('/posts/{post}', 'PostController@show')->where("post", "[0-9]+");
//Route::get('/posts/create', 'PostController@create');
//Route::post("/posts", "PostController@store");
//Route::get("/posts/{post}/edit", "PostController@edit");
//Route::patch("/posts/{post}", "PostController@update");
//Route::delete("/posts/{post}", "PostController@destroy");
//Route::post("/posts/{post}/comments", "CommentController@store");
//Route::delete("/posts/{post}/comments/{comment}", "CommentController@destroy");

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'create'])->where("post", "[0-9]+");
Route::get('/posts/create', [PostController::class, 'create']);
Route::post("/posts", [PostController::class, 'create']);
Route::get("/posts/{post}/edit", [PostController::class, 'edit']);
Route::patch("/posts/{post}", [PostController::class, 'update']);
Route::delete("/posts/{post}", [PostController::class, 'destroy']);
Route::post("/posts/{post}/comments", [CommentController::class, 'store']);
Route::delete("/posts/{post}/comments/{comment}", [CommentController::class, 'destroy']);
