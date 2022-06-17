<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\followController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExploreController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("tweets", TweetController::class)->only(["index", "store"]);
Route::get("profiles/{user}", [ProfileController::class, "show"])->name("profiles.show");
Route::get("profiles/{user}/edit",[ProfileController::class, 'edit'])->name("profiles.edit");
Route::patch("profiles/{user}/edit",[ProfileController::class, 'update'])->name("profiles.update");
Route::post("profiles/{user}/follow", [FollowController::class, "store"])->name("profiles.follow");
Route::get('/explore', ExploreController::class)->middleware('auth');
Auth::routes();
