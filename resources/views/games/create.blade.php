@extends('layouts.main')

@section('title', '新規作成')

@section('content')
    <h1>新規作成</h1>
    <form action="{{ route('games.store') }}" method="post">
        @csrf
        <div>
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">本文</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>
        <div>
            <select name='genre' id='genre'>
                <option value="" selected="selected">選択してください</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" @if (old('genre') == $genre->name) selected @endif>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="img_path">画像</label>
            <input type="text" name="img_path" id="img_path" value="{{ old('img_path') }}">
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
@endsection
