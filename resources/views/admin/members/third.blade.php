@extends('layouts.admin.app')

@section('content')
<div class="center-width">
  @foreach ($members as $member)
    <div class="post-item">
      <dl>
        <dt>名前</dt>
        <dd>{{ $member->name }}</dd>
        <dt>学年</dt>
        <dd>{{ $member->year }}年生</dd>
        <dt>得意なショット</dt>
        <dd>{{ $member->shot }}</dd>
        <dt>コメント</dt>
        <dd>{{ $member->comment }}</dd>
      </dl>
    </div>
  @endforeach
</div>
@endsection