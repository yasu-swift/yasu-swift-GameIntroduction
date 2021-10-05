@extends('layouts.main')

@section('title', '記事詳細')

@section('content')
    @include('partial.game')
    <table class="table-bordered mb-5 mt-3">
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
@endsection
