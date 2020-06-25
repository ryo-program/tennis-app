@extends('layouts.user.app')

@section('content')
<div class="section-top">
  <h1 class="section-top-title">〜 Club Information 〜</h1>
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
      <a href="{{ route('user.posts.show', ['post' => $post]) }}" class="link">詳細</a>
    </div>
  @endforeach
  <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
  </div>
</div>
@endsection