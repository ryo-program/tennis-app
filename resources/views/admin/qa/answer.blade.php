@extends('layouts.admin.app')

@section('header-list')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('admin.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
  <div class="section-top">
    <h1 class="section-top-title">〜 質問の回答 〜</h1>
  </div>
  <div class="center-width">
    <form action="{{ route('admin.qa.store') }}" method="POST" class="post-item">
      @csrf
      <input type="hidden" name="question_id" value="{{ $question->id }}">
      <div class="pd-s">
        <p>Q: {{ $question->question }}</p>
        <textarea name="answer" rows="4" value="{{ old('answer') }}"></textarea>
        @if ($errors->has('answer'))
          <p class="error">{{ $errors->first('answer') }}</p>
        @endif
      </div>
      <button type="submit" class="btn">送信</button>
      <a href="{{ route('admin.qa') }}" class="link">キャンセル</a>
    </form>
  </div>
@endsection