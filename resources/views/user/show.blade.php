@extends('layouts.user.app')

@section('header-list')
  <li><a href="{{ route('user.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('user.qa') }}" class="header-link">メッセージ</a></li>
  <li><a href="{{ route('user.members') }}" class="header-link">部員紹介</a></li>
  <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
  <div class="center-width">
    <div class="post-item">
      <h1>{{ $post->title }}</h1>
      <small>({{ $post->created_at->format('Y/m/d') }})</small>
      <p class="post-body">{!! nl2br(e($post->body)) !!}</p>
      
      <div class="comment">
        <p class="middle">＜コメント＞</p>
        @forelse ($post->comments as $comment)
          <div>
            <p>{!! nl2br(e($comment->body)) !!}</p>
            <small>({{ $comment->created_at->format('Y/m/d') }})</small>
          </div>
        @empty
          <p>コメントはありません。</p>
        @endforelse
      </div>

      <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div>
          <textarea name="body" id="body"  rows="10">{{ old('body') }}</textarea>
          @if ($errors->has('body'))
            <p class="error">{{ $errors->first('body') }}</p>
          @endif
        </div>
        <button type="submit" class="btn">コメントする</button>
      </form>
      <ul>
        <li><a href="{{ route('user.posts') }}" class="link">一覧へ戻る</a></li>
      </ul>
    </div>
  </div>
@endsection