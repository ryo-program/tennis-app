@extends('layouts.user.app')

@section('header-list')
    <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
<div class="home-container">
    <div class="home">
        <h1>Tennis Club Introduction!</h1>
        <a href="{{ route('user.posts') }}" class="link">掲示板</a>
        <a href="#" class="link">メッセージ</a>
        <a href="{{ route('user.members') }}" class="link">メンバー紹介</a>
    </div>
</div>
@endsection