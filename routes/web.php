<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Idea;
use App\Http\Controllers\Comment;

Route::get('/', [Idea::class, 'index']);

Route::post('/idea', action: [Idea::class,'createIdea'])->middleware('auth');

Route::delete("/idea/{id}", [Idea::class,"delete"]);

Route::get("/idea/{id}", [Idea::class,"show"]);

Route::get("/idea/{id}/edit", [Idea::class,"edit"]);

Route::put("/idea/{id}", [Idea::class,"update"]);

Route::post("/idea/{id}/comment", [Comment::class,"createComment"])->middleware("auth");

Route::get("/register", [Auth::class, "register"]);

Route::post("/register", [Auth::class, "createUser"]);

Route::get("/login", [Auth::class, "login"])->name('login');

Route::post("/login", [Auth::class, "authenticate"]);