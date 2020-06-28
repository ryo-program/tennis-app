@extends('layouts.admin.app')

@section('header-link')
  <li><a href="{{ route('admin.posts') }}" class="header-link">掲示板</a></li>
  <li><a href="#" class="header-link">メッセージ</a></li>
  <li><a href="{{ route('admin.members') }}" class="header-link">部員紹介</a></li>
@endsection

@section('content')
  <div class="section-head">
    <h1 class="section-title">〜 Q&A 〜</h1>
    <a href="#" class="add cB">+</a>
  </div>
  <div class="center-wdth">
    @foreach($qas as $qa)
      <div class="post-item">
        <h1 class="fz-l">Question</h1>
        <small>({{ $qa->created_at->format('Y/m/d') }})</small>
        <p class="post-body fz-s">{{ $qa->question }}</p>
      </div>
    @endforeach
  </div>
@endsection