<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="{{ route('games.index') }}">ゲーム紹介所</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('games.index') }}">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('games.create') }}">新規作成 <span
                        class="sr-only">(current)</span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('games.index') }}">
            <div>
                <select name='genre' id='genre' class="form-control mr-sm-2">
                    <option value="" selected="selected">選択してください</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->name }}" @if (old('genre') == $genre->name) selected @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <input class="form-control mr-sm-2" type="search" name="title" placeholder="タイトル">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
