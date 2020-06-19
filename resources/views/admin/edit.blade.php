@extends('layouts.admin.app')

@section('content')
  <div>
    <form action="{{ route('admin.posts.update', ['post' => $post]) }}" method="POST">
      @csrf
      @method('PUT')
      <fieldset>
        <div class="add-title">
          <label for="title">タイトル</label>
          <input type="text" id="title" value="{{ old('title') ?: $post->title }}" name="title">
          @if ($errors->has('title'))
            <p class="error">{{ $errors->first('title') }}</p>
          @endif
        </div>
        <div>
          <label for="body">本文</label>
          <textarea name="body" id="body" rows="4">{!! nl2br(e($post->body)) !!}</textarea>
          @if ($errors->has('body'))
            <p class="error">{{ $errors->first('body') }}</p>
          @endif
        </div>
        <button type="submit">更新</button>
        <a href="{{ route('admin.posts.show', ['post' => $post]) }}">キャンセル</a>
      </fieldset>
    </form>
  </div>
@endsection