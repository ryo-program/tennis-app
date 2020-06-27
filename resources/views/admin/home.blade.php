@extends('layouts.admin.app')

@section('content')
<div class="home-container">
    <div class="home">
        <h1>庭球大学 硬式テニス部</h1>
        <a href="{{route('admin.posts')}}" class="link">掲示板</a>
        <a href="#" class="link">メッセージ</a>
        <a href="{{ route('admin.members') }}" class="link">部員紹介</a>
    </div>
</div>
@endsection