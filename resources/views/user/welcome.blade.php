@extends('layouts.user.app')

@section('header-list')
    <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
<div class="home-container">
    <div class="home">
        <h1>庭球大学 硬式テニス部</h1>
        <a href="{{ route('user.posts') }}" class="link">掲示板</a>
        <a href="{{ route('user.qa') }}" class="link">メッセージ</a>
        <a href="{{ route('user.members') }}" class="link">部員紹介</a>
    </div>
</div>
@endsection