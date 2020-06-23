@extends('layouts.admin.app')

@section('content')
  <div class="member-header">
    <div class="section-head">
      <h1 class="section-title">〜 Members 〜</h1>
      <a href="{{ route('admin.members.create') }}" class="add cB">+</a>
    </div>
    <ul class="center-width member-link">
      <li><a href="{{ route('admin.first') }}" class="link">1年</a></li>
      <li><a href="{{ route('admin.second') }}" class="link">2年</a></li>
      <li><a href="{{ route('admin.third') }}" class="link">3年</a></li>
    </ul>
  </div>
@endsection