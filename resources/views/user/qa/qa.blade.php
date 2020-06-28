@extends('layouts.user.app')

@section('header-list')
  <li><a href="{{ route('user.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('user.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('user.members') }}" class="header-link">部員紹介</a></li>
  <li><a href="{{ route('admin.login') }}" class="header-link">管理者ログイン</a></li>
@endsection


@section('content')
  <div class="section-head">
    <h1 class="section-title">〜 Q&A 〜</h1>
    <a href="{{ route('qa.create') }}" class="add cB">+</a>
  </div>
  <div class="center-width">
    <p>硬式テニス部について、気になることや疑問がある場合は自由にここで質問してください！匿名で質問できるため気軽に質問してください！部員がなるべく早く質問に答えます。部活の雰囲気、練習内容、イベントについてなど、本当になんでもいいので聞いてください！学校のことについてでも良いです！<br>※匿名で質問できますが、不適切と判断した質問は、こちらで削除させて頂きます。</p>
    @foreach($qas as $qa)
      <div class="post-item">
        <h1 class="fz-m">Q</h1>
        <small>({{ $qa->created_at->format('Y/m/d') }})</small>
        <p class="post-body fz-s">{{ $qa->question }}</p>
      </div>
    @endforeach
  </div>
@endsection