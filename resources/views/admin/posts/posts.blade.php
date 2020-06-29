@extends('layouts.admin.app')

@section('header-list')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('admin.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
<div class="section-head">
  <h1 class="section-title">〜 部活掲示板 〜</h1>
  <a href="{{ route('admin.posts.create') }}" class="add cB">+</a>
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
      <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="link">詳細</a>
    </div>
  @endforeach
  <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
  </div>
</div>
@endsection