<?php

Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
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
        Route::get('members', 'MembersController@index')->name('members');
    });

});
