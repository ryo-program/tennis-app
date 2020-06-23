@extends('layouts.user.app')

@section('content')
<div class="home-container">
    <div class="home">
        <h1>Tennis Club Introduction!</h1>
        <a href="{{ route('user.posts') }}" class="link">掲示板</a>
        <a href="#" class="link">メッセージ</a>
        <a href="#" class="link">メンバー紹介</a>
    </div>
</div>
@endsection