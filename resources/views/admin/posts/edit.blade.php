@extends('layouts.admin.app')

@section('header-list')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('admin.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
  <div class="section-top">
    <h1 class="section-top-title">〜 投稿の更新 〜</h1>
  </div>
  <div class="center-width">
    <form action="{{ route('admin.posts.update', ['post' => $post]) }}" method="POST" class="post-item">
      @csrf
      @method('PUT')
      <fieldset>
        <div class="add-title">
          <p>タイトル</p>
          <input type="text" id="title" value="{{ old('title') ?: $post->title }}" name="title">
          @if ($errors->has('title'))
            <p class="error">{{ $errors->first('title') }}</p>
          @endif
        </div>
        <div>
          <p>本文</p>
          <textarea name="body" id="body" rows="4">{!! nl2br(e($post->body)) !!}</textarea>
          @if ($errors->has('body'))
            <p class="error">{{ $errors->first('body') }}</p>
          @endif
        </div>
        <button type="submit" class="btn">更新</button>
        <a href="{{ route('admin.posts.show', ['post' => $post]) }}">キャンセル</a>
      </fieldset>
    </form>
  </div>
@endsection