<?php
// use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('user.top');
Route::get('/posts', 'HomeController@posts')->name('user.posts');
Route::resource('posts', 'HomeController', ['only' => ['show']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
Route::get('qa', 'User\qa\QuestionController@qa')->name('user.qa');
Route::resource('qa', 'User\qa\QuestionController', ['only' => ['create', 'store']]);
Route::get('members', 'MembersController@membersDisplay')->name('user.members');
Route::get('members/first', 'MembersController@first')->name('first');
Route::get('members/second', 'MembersController@second')->name('second');
Route::get('members/third', 'MembersController@third')->name('third');

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        Route::get('home', 'HomeController@index')->name('top');
        Route::get('posts', 'PostsController@index')->name('posts');
        Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'destroy', 'edit', 'update']]);
        Route::resource('comments', 'CommentsController', ['only' => ['store']]);
        Route::get('qa', 'qa\QuestionController@qa')->name('qa');
        Route::get('members', 'MembersController@index')->name('members');
        Route::get('members/first', 'MembersController@first')->name('first');
        Route::get('members/second', 'MembersController@second')->name('second');
        Route::get('members/third', 'MembersController@third')->name('third');
        Route::resource('members', 'MembersController', ['only' => ['create', 'store', 'destroy']]);
    });

});
