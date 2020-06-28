@extends('layouts.user.app')

@section('header-list')
  <li><a href="{{ route('user.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('user.qa') }}" class="header-link">メッセージ</a></li>
  <li><a href="{{ route('user.members') }}" class="header-link">部員紹介</a></li>
  <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection

@section('content')
  <div class="member-header">
    <div class="section-top">
      <h1 class="section-top-title">〜 部員紹介 〜</h1>
    </div>
    <ul class="center-width member-link">
      <li><a href="{{ route('first') }}" class="link">1年</a></li>
      <li><a href="{{ route('second') }}" class="link">2年</a></li>
      <li><a href="{{ route('third') }}" class="link">3年</a></li>
    </ul>
  </div>
  <div class="center-width">
    @foreach($members as $member)
      <div class="post-item member-item">
        <div  class="profile-item">
          <figure>
            <img src="uploads/{{ $member->profile_img }}" width="240px" height="200px">
          </figure>
          <dl>
            <dt>〜 名前 〜</dt>
            <dd>{{ $member->name }}</dd>
            <dt>〜 学年 〜</dt>
            <dd>{{ $member->year }}年生</dd>
            <dt>〜 得意なショット 〜</dt>
            <dd>{{ $member->shot }}</dd>
            <dt>〜 コメント 〜</dt>
            <dd>{{ $member->comment }}</dd>
          </dl>
        </div>
      </div>
    @endforeach
  </div>
@endsection