@extends('layouts.admin.app')

@section('content')
  <div class="member-header">
    <div class="post-head">
      <h1 class="section-title">〜 MEMBERS 〜</h1>
      <a href="{{ route('admin.members.create') }}" class="add-post cB">+</a>
    </div>
    <ul class="bcenter">
      <li><a href="{{ route('admin.first') }}" class="link">1年</a></li>
      <li><a href="{{ route('admin.second') }}" class="link">2年</a></li>
      <li><a href="{{ route('admin.third') }}" class="link">3年</a></li>
    </ul>

  </div>
@endsection