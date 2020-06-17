@extends('layouts.admin.app')

<style>
  .post {
    width: 80%;
    margin: 30px auto;
  }
  .post-item {
    margin-top: 40px;
  }
  .add-post {
    font-size: 50px;
    float: right;
  }
</style>

@section('content')
<a href="{{ route('admin.top') }}">ホームに戻る</a>
<a href="{{ route('admin.posts.create') }}" class="add-post">+</a>
<h1>CLUB INFORMATION</h1>
<div class="post">
  @foreach ($posts as $post)
    <div class="post-item">
      <h1>{{ $post->title }}</h1>
      <small>{{ $post->created_at->format('Y/m/d') }}</small>
      <p>{{ $post->body }}</p>
      <div class="post-item-comment">
        @if ($post->comments->count())
          <p>コメント： {{ $post->comments->count() }}件</p>
        @endif
      </div>
      <a href="{{ route('admin.posts.show', ['post' => $post]) }}">詳細</a>
    </div>
  @endforeach
</div>
@endsection