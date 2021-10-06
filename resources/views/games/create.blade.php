@extends('layouts.main')

@section('title', '新規作成')

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
            <label for="genre">ジャンル</label>
            <select name='genre' id='genre'>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" @if (old('genre') == $genre->name) selected @endif>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div>

            <p>&nbsp;</p>
            <label for="img_path">画像url</label>
            <input type="file" name="img_path" id="img_path" value="{{ old('img_path') }}">
            <p>&nbsp;</p>
        </div>
        <div>
            <input type="submit" value="登録" class="btn btn-success">
        </div>
    </form>
    {{-- Homeボタン --}}
    <input type="button" value="Home" onclick="location.href='/games'" class="btn btn-primary">

@endsection
