@extends('layouts.admin.app')

@section('content')
  <div>
    <div>
      <div class="add-title">
        <h1>{{ $post->title }}</h1>
      </div>
      <div>
        <p>{!! nl2br(e($post->body)) !!}</p>
      </div>

      <div class="comment">
        <h3>コメント</h3>
        @forelse ($post->comments as $comment)
          <div>
            <time>{{ $comment->created_at->format('Y/m/d') }}</time>
            <p>{!! nl2br(e($comment->body)) !!}</p>
          </div>
        @empty
          <p>コメントはありません。</p>
        @endforelse
      </div>

      <form action="{{ route('admin.comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div>
          <label for="body">本文</label>
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
        <button>削除</button>
      </form>
      <a href="{{ route('admin.posts.edit', ['post' => $post]) }}">編集</a>
      <a href="{{ route('admin.posts') }}">一覧へ戻る</a>
    </div>
  </div>
@endsection