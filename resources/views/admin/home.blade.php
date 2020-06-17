@extends('layouts.admin.app')

@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
</div>

<div class="home">
    <h1>Tennic Club Introduction!</h1>
    <a href="{{route('admin.posts')}}">掲示板</a>
    <a href="#">メッセージ</a>
    <a href="#">メンバー紹介</a>
</div>
       
@endsection