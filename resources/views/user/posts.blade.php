@extends('layouts.user.app')

@section('header-list')
  <li><a href="{{ route('user.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('user.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('user.members') }}" class="header-link">部員紹介</a></li>
  <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
<div class="section-top">
  <h1 class="section-top-title">〜 部活掲示板 〜</h1>
</div>
<div class="center-width">
  @foreach ($posts as $post)
    <div class="post-item">
      <h1 class="fz-l">{{ $post->title }}</h1>
      <small>({{ $post->created_at->format('Y/m/d') }})</small>
      <p class="post-body fz-s">{{ $post->body }}</p>
      <div class="post-item-comment">
        @if ($post->comments->count())
          <p>コメント： {{ $post->comments->count() }}件</p>
        @else
          <p>コメント： 0件</p>
        @endif
      </div>
      <a href="{{ route('posts.show', ['post' => $post]) }}" class="link">詳細</a>
    </div>
  @endforeach
  <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
  </div>
</div>
@endsection