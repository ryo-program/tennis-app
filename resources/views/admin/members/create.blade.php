@extends('layouts.admin.app')

@section('content')
  <div>
    <h1 class="section-title">-- 選手追加 --</h1>
    <div class="post">
      <form action="{{ route('admin.members.store') }}" method="POST" class="post-item">
        @csrf
        <div class="add-title">
          <p>名前</p>
          <input type="text" value="{{ old('name') }}" name="name">
          @if ($errors->has('name'))
            <p class="error">{{ $errors->first('name') }}</p>
          @endif
        </div>
        <div>
          <p>コメント</p>
          <textarea name="body" rows="4" value="{{ old('comment') }}"></textarea>
          @if ($errors->has('comment'))
            <p class="error">{{ $errors->first('comment') }}</p>
          @endif
        </div>
        <button type="submit">投稿</button>
        <a href="{{ route('admin.members') }}">キャンセル</a>
      </form>
    </div>
  </div>
@endsection