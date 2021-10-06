@extends('layouts.main')

@section('title', '記事詳細')

@section('content')
    @include('partial.game')
    <table class="table table-striped mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>ユーザー名</th>
                <td>
                    <p>{{ $game->name }}</p>
                </td>
            </tr>
            <tr>
                <th>タイトル</th>
                <td>{{ $game->title }}</td>
            </tr>
            <tr>
                <th>本文</th>
                <td>{{ $game->body }}</td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td>{{ $game->genre->name }}</td>
            </tr>
            <tr>
                <th>画像</th>
                <td>{{ $game->img_path }}</td>
            </tr>
        </tbody>
    </table>
    <!-- 論文のidを元に編集ページへ遷移する -->
    <input type="button" value="編集" onclick="location.href='/games/{{ $game->id }}/edit'" class="btn btn-success">
    {{-- 削除ボタン --}}
    <form action="{{ route('games.destroy', $game) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}" class="btn btn-danger">削除する</button>
    </form>
@endsection
