<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 順番大事
        $title = $request->title;
        $genre = $request->genre;
        $params = $request->query();
        $genres = Genre::all();
        $games = Game::search($params)->paginate(6);
        $games->appends(compact('title', 'genre'));
        return view('games.index', compact('games', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Game $game)
    {
        $genres = Genre::all();
        return view('games.create', compact('game', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game();
        $game->genre_id = $request->genre;
        $game->name = $request->name;
        $game->title = $request->title;
        $game->body = $request->body;
        $game->img_path = $request->img_path;
        $game->save();
        // dd($game);
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        $genres = Genre::all();
        return view('games.show', compact('game', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $genres = Genre::all();
        return view('games.edit', compact('game', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->genre_id = $request->genre;
        $game->name = $request->name;
        $game->title = $request->title;
        $game->body = $request->body;
        $game->img_path = $request->img_path;
        // dd($game);
        $game->save();
        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
