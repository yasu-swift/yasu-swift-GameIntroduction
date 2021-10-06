@extends('layouts.main')

@section('title', '記事編集')

@section('content')
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>記事編集</h1>
    <form action="{{ route('games.update', $game) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $game->name) }}">
        </div>
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" value="{{ old('title', $game->title) }}">
        </div>
        <div>
            <label for="body">本文</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body', $game->body) }}</textarea>
        </div>
        <div>
            <label for="genre">ジャンル</label>
            <select name='genre' id='genre'>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" @if (old('genre') == $genre->id) selected @endif>{{ old('genre', $genre->name) }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="img_path">画像url</label>
            <input type="text" name="img_path" id="img_path" value="{{ old('img_path', $game->img_path) }}">
        </div>
        <div>
            <img src="{{ url($game->img_path) }}" class="square-img">
        </div>
        <div>
            <input type="submit" value="編集" class="btn btn-success">
        </div>
    </form>
    {{-- 戻るボタン --}}
    <input type="button" value="戻る" onclick="location.href='/games/{{ $game->id }}'" class="btn btn-primary">
@endsection
