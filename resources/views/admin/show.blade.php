@extends('layouts.admin.app')

@section('content')
  <div class="post">
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

      <form action="{{ route('admin.comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div>
          <!-- <label for="body">本文</label> -->
          <textarea name="body" id="body"  rows="10">{{ old('body') }}</textarea>
          @if ($errors->has('body'))
            <p>{{ $errors->first('body') }}</p>
          @endif
        </div>
        <button type="submit">コメントする</button>
      </form>

      <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>投稿を削除</button>
      </form>
      <ul>
        <li><a href="{{ route('admin.posts.edit', ['post' => $post]) }}">編集</a></li>
        <li><a href="{{ route('admin.posts') }}">一覧へ戻る</a></li>
      </ul>
    </div>
  </div>
@endsection