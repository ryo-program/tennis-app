@extends('layouts.admin.app')

@section('content')
  <div>
    <h1 class="section-title">-- 選手追加 --</h1>
    <div class="post">
      <form action="{{ route('admin.members.store') }}" method="POST" class="post-item" enctype="multipart/form-data">
        @csrf
        <div class="add-title">
          <p>名前</p>
          <input type="text" value="{{ old('name') }}" name="name">
          @if ($errors->has('name'))
            <p class="error">{{ $errors->first('name') }}</p>
          @endif
        </div>

        <dl>
          <dt>学年</dt>
          <dd>
            <input type="radio" name="year" value="1" id="first">
            <label for="first">1年生</label>
            <input type="radio" name="year" value="2" id="second">
            <label for="second">2年生</label>
            <input type="radio" name="year" value="3" id="third">
            <label for="third">3年生</label>
          </dd>
        </dl>

        <div>
          <p>得意なショット</p>
          <textarea name="shot" rows="4" value="{{ old('shot') }}"></textarea>
          @if ($errors->has('shot'))
            <p class="error">{{ $errors->first('shot') }}</p>
          @endif
        </div>

        <div>
          <p>コメント</p>
          <textarea name="comment" rows="4" value="{{ old('comment') }}"></textarea>
          @if ($errors->has('comment'))
            <p class="error">{{ $errors->first('comment') }}</p>
          @endif
        </div>
        <div>
          <p>画像</p>
          <input type="file" name="img" >
        </div>
        <button type="submit">投稿</button>
        <a href="{{ route('admin.members') }}">キャンセル</a>
      </form>
    </div>
  </div>
@endsection