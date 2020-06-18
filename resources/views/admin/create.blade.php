@extends('layouts.admin.app')

@section('content')
  <div>
    <form action="{{ route('admin.posts.store') }}" method="POST">
      @csrf
      <div class="add-title">
        <label for="title">タイトル</label>
        <input type="text" id="title" value="{{ old('title') }}" name="title">
        @if ($errors->has('title'))
          <div>{{ $errors->first('title') }}</div>
        @endif
      </div>
      <div>
        <label for="body">本文</label>
        <textarea name="body" id="body" rows="4" value="{{ old('body') }}"></textarea>
        @if ($errors->has('body'))
            <div>{{ $errors->first('body') }}</div>
          @endif
      </div>
      <button type="submit">投稿</button>
      <a href="{{ route('admin.posts') }}">キャンセル</a>
    </form>
  </div>
@endsection