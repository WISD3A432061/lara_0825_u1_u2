<?php

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
    \App\Post::create([
        'title' => 'test title',
        'content' => 'test content',
    ]);
*/

Route::get('/test', function () {
    /*$post = new \App\Post();
    $post->title ='test title';
    $post->content ='test content';
    $post->save();
    */
    //all方法
    /*$posts = \App\Post::all();
    dd($posts);
    */
    //find方法
    $post = \App\Post::find(1);
    dd($post);
});



