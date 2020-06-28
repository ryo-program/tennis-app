@extends('layouts.admin.app')

@section('header-link')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="#" class="header-link">メッセージ</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
  <div>
    <div class="center-width">
    <div class="section-top">
      <h1 class="section-top-title">〜 選手追加 〜</h1>
    </div>
      <form action="{{ route('admin.members.store') }}" method="POST" class="post-item" enctype="multipart/form-data">
        @csrf
        <div class="pd-s">
          <p>名前</p>
          <input type="text" value="{{ old('name') }}" name="name">
          @if ($errors->has('name'))
            <p class="error">{{ $errors->first('name') }}</p>
          @endif
        </div>

        <dl class="pd-s">
          <dt>学年</dt>
          <dd>
            <input type="radio" name="year" value="1" id="first">
            <label for="first">1年生</label>
            <input type="radio" name="year" value="2" id="second">
            <label for="second">2年生</label>
            <input type="radio" name="year" value="3" id="third">
            <label for="third">3年生</label>
          </dd>
        </dl>

        <div class="pd-s">
          <p>得意なショット</p>
          <textarea name="shot" rows="4" value="{{ old('shot') }}"></textarea>
          @if ($errors->has('shot'))
            <p class="error">{{ $errors->first('shot') }}</p>
          @endif
        </div>

        <div class="pd-s">
          <p>コメント</p>
          <textarea name="comment" rows="4" value="{{ old('comment') }}"></textarea>
          @if ($errors->has('comment'))
            <p class="error">{{ $errors->first('comment') }}</p>
          @endif
        </div>
        <div class="pd-s">
          <p>画像</p>
          <input type="file" name="profile_img" >
        </div>
        <button type="submit" class="link">選手追加</button>
        <a href="{{ route('admin.members') }}">キャンセル</a>
      </form>
    </div>
  </div>
@endsection