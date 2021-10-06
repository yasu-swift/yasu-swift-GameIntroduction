<div class="row">
    <div>
        <img src="{{ Storage::url($game->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('games.show', $game->id) }}">{{ $game->title }}</a>
            </h3>
        </div>
        <div>
            <div>
                <h5>{{ mb_strimwidth($game->body, 0, 50) }}...</h5>
            </div>
            <div><b>ジャンル<dl>{{ $game->genre->name }}</b></div>
            @if (!empty($game->images))
                <ul class="image_images">
                    @foreach ($game->images as $image)
                        <li class="item">
                            <img src="{{ asset($image->img_path) }}" class="square-img-s">
                        </li>
                    @break($loop->iteration >= 7)
            @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
