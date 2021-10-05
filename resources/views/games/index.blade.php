@extends('layouts.main')

@section('title', '記事一覧')

@section('content')
<img src="game_image/1/jpg" alt="">
        @if (!empty($games))
        <ul>
            @foreach ($games as $game)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.game')
                </li>
            @endforeach
        </ul>
    @endif
        <div class="d-flex justify-content-center">
        {{ $games->links() }}
    </div>
@endsection