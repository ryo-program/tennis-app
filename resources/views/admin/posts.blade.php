@extends('layouts.admin.app')

@section('content')
<div class="post-head">
  <h1 class="section-title">-- CLUB INFORMATION --</h1>
  <a href="{{ route('admin.posts.create') }}" class="add-post">+</a>
</div>
<div class="post">
  @foreach ($posts as $post)
    <div class="post-item">
      <h1>{{ $post->title }}</h1>
      <small>({{ $post->created_at->format('Y/m/d') }})</small>
      <p class="post-body">{{ $post->body }}</p>
      <div class="post-item-comment">
        @if ($post->comments->count())
          <p>コメント： {{ $post->comments->count() }}件</p>
        @endif
      </div>
      <a href="{{ route('admin.posts.show', ['post' => $post]) }}">詳細</a>
    </div>
  @endforeach
  <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
  </div>
</div>
@endsection