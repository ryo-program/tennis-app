@extends('layouts.admin.app')

@section('header-list')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('admin.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
<div class="center-width">
<div class="section-top">
  <h1 class="section-top-title">〜 1年生 〜</h1>
</div>
  @foreach ($members as $member)
    <div class="post-item member-item">
      <form action="{{ route('admin.members.destroy', ['member' => $member]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn del">削除</button>
      </form>
      <div  class="profile-item">
        <figure>
          <img src="../../uploads/{{ $member->profile_img }}" width="240px" height="200px">
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