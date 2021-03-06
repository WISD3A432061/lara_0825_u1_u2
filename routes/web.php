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
    /*$post = \App\Post::find(1);
    dd($post);
    */
    //條件式
    /*$posts = \App\Post::where('id', '<', 10)‐>orderBy('id', 'DESC')‐>get();
    dd($posts);
    */

    //使用update方式更新資料
    $post =\App\Post::find(1);
    /*$post->update([
        'title' => 'updated title',
        'content' => 'updated content',
        ]);
     */
    //使用save方法更新資料
    /* $post = \App\Post::find(1);
    $post->title ='saved title';
    $post->content ='saved conntent';
    $post‐>save();
    */
    //使用delete方法删除資料
    /*$post = \App\Post::find(1);
    $post->delete();
    */
    //使用destroy方法删除資料
    /*
     \App\Post::destroy(2);
    */
    //删除多筆資料
    /*
    \App\Post::destroy(3, 5, 7);
    */
    //取得Collection
    /*
    $allPosts = \App\Post::all();
    dd($allPosts);
    $featuredPosts = \App\Post::where('is_feature', 1)‐>get();
    dd($featuredPosts);
    */
    //取得Model
    /*$fourthPost = \App\Post::find(4);
    dd($fourthPost);
    $lastPost = \App\Post::orderBy('id', 'DESC')->first();
    dd($lastPost);
    */
    $post = \App\Post::find(1);
        foreach($post->comments as $comment) {
                echo $comment->content.'<br>';
         }
});



