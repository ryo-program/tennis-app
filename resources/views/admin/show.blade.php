@extends('layouts.admin.app')

@section('content')
  <div>
    <div>
      <div class="add-title">
        <p>{{ $post->title }}</p>
      </div>
      <div>
        <p>{!! nl2br(e($post->body)) !!}</p>
      </div>
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