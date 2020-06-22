@extends('layouts.admin.app')

<!-- <style>
.home-container {
  background-image: url('/public/img/tennisball.jpg');
  background-position: center;
  background-size: cover;
  height: 100vw;
}
</style> -->
@section('content')
<!-- <div class="card">
    <div class="card-header">Dashboard</div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
</div> -->
<div class="home-container">
    <div class="home">
        <h1>Tennis Club Introduction!</h1>
        <a href="{{route('admin.posts')}}" class="link">掲示板</a>
        <a href="#" class="link">メッセージ</a>
        <a href="{{ route('admin.members') }}" class="link">メンバー紹介</a>
    </div>
</div>
       
@endsection