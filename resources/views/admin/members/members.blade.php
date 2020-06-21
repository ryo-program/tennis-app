@extends('layouts.admin.app')

@section('content')
  <div class="member-header">
    <div class="post-head">
      <h1 class="section-title">-- MEMBERS --</h1>
      <a href="{{ route('admin.members.create') }}" class="add-post cB">+</a>
    </div>
    <ul class="bcenter">
      <li><a href="{{ route('admin.first') }}" class="link">1年</a></li>
      <li><a href="{{ route('admin.second') }}" class="link">2年</a></li>
      <li><a href="{{ route('admin.third') }}" class="link">3年</a></li>
    </ul>
  </div>
  <!-- <div class="members">
    <div class="member-item">
      <img src="" alt="">
      <div class="intro">
        <h3>越前リョーマ</h3>
        <p>~ 得意なショット ~</p>
        <p>ツイストサーブ</p>
        <p>~ コメント ~</p>
        <p>越前リョーマです！最強すぎて困ってます。誰か僕のこと倒してみない？まぁ、無理だと思うけどね(笑)</p>
      </div>
    </div> -->
  </div>
@endsection