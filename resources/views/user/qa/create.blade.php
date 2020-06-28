@extends('layouts.user.app')

@section('header-list')
  <li><a href="{{ route('user.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('user.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('user.members') }}" class="header-link">部員紹介</a></li>
  <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
  <div class="section-top">
    <h1 class="section-top-title">〜 質問の作成 〜</h1>
  </div>
  <div class="center-width">
    <form action="{{ route('qa.store') }}" method="POST" class="post-item">
      @csrf
      <div class="pd-s">
        <p>質問の内容</p>
        <textarea name="question" rows="4" value="{{ old('question') }}"></textarea>
        @if ($errors->has('question'))
          <p class="error">{{ $errors->first('question') }}</p>
        @endif
      </div>
      <button type="submit" class="btn">送信</button>
      <a href="{{ route('user.qa') }}" class="link">キャンセル</a>
    </form>
  </div>
@endsection