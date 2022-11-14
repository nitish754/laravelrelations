<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Video;
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
   $user= User::find(1);

   $post = Post::with('comments')->get();

   $video = Video::with('comments')->get();

    // dd($post);
    return $video;
});
