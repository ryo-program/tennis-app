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
    <p>硬式テニス部について、気になることや疑問がある場合は自由にここで質問してください！匿名で質問できるため気軽に質問してください！部員がなるべく早く質問に答えます。部活の雰囲気、練習内容、イベントについてなど、本当になんでもいいので聞いてください！学校のことについてでも良いです！<br><span class="red">※匿名で質問できますが、不適切と判断した質問はこちらで削除させて頂きます。</span></p>
    <div class="question">
      @foreach($qas as $qa)
        <div class="post-item question-item">
          <p class="fz-s">Q:  {{ $qa->question }}</p>
          <small>({{ $qa->created_at->format('Y/m/d') }})</small>
          @forelse ($qa->answers as $answer)
          <div class="pd-s">
            <p class="fz-s"><span class="red">A</span>: {!! nl2br(e($answer->answer)) !!}</p>
            <small>({{ $answer->created_at->format('Y/m/d') }})</small>
          </div>
          @empty
          <p class="pd-s">回答はまだありません。</p>
          @endforelse
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mb-5">
      {{ $qas->links() }}
    </div>
  </div>
@endsection