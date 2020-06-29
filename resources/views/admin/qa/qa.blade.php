@extends('layouts.admin.app')

@section('header-list')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="{{ route('admin.qa') }}" class="header-link">Q&A</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
  <div class="section-top">
    <h1 class="section-top-title">〜 Q&A 〜</h1>
  </div>
  <div class="center-width">
    <p>硬式テニス部について、気になることや疑問がある場合は自由にここで質問してください！匿名で質問できるため気軽に質問してください！部員がなるべく早く質問に答えます。部活の雰囲気、練習内容、イベントについてなど、本当になんでもいいので聞いてください！学校のことについてでも良いです！<br><span class="red">※匿名で質問できますが、不適切と判断した質問は、こちらで削除させて頂きます。</span></p>
    <div class="question">
      @foreach($qas as $qa)
        <div class="post-item question-item">
          <p class="fz-s">Q: {{ $qa->question }}</p>
          <small>({{ $qa->created_at->format('Y/m/d') }})</small>
          @forelse ($qa->answers as $answer)
          <div class="pd-s">
            <p class="fz-s"><span class="red">A</span>: {!! nl2br(e($answer->answer)) !!}</p>
            <small>({{ $answer->created_at->format('Y/m/d') }})</small>
          </div>
          @empty
          <p class="pd-s">回答はまだありません。</p>
          @endforelse
          <a href="{{ route('admin.qa.show', ['qa' => $qa]) }}" class="link">返信</a>
          <form action="{{ route('admin.qa.destroy', ['qa' => $qa]) }}" method="POST" class="position">
            @csrf
            @method('DELETE')
            <button class="btn del-btn">削除</button>
          </form>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mb-5">
      {{ $qas->links() }}
    </div>
  </div>
@endsection

@section('script')
<script>
  $(function(){
  $(".del-btn").click(function(){
  if(confirm("本当に削除しますか？")){
  //そのままsubmit（削除）
  }else{
  //cancel
  return false;
  }
  });
  });
</script>
@endsection