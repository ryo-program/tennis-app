@extends('layouts.user.app')

@section('content')
  <div class="member-header">
    <div class="section-top">
      <h1 class="section-top-title">〜 Members 〜</h1>
    </div>
    <ul class="center-width member-link">
      <li><a href="{{ route('first') }}" class="link">1年</a></li>
      <li><a href="{{ route('second') }}" class="link">2年</a></li>
      <li><a href="{{ route('third') }}" class="link">3年</a></li>
    </ul>
  </div>
@endsection