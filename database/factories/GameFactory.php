<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Genre;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $game_name = ['ファイナルファンタジー', 'ドラクエ', 'Minecraft', 'Fortnite', 'リターナル', 'ディスガイア', 'ポケモン', '天稲のサクナヒメ', 'モンスターハンター', '麻雀', 'マインスイーパー', 'ピンボール', 'スマブラ', 'マリオカート'];
        $game_action = ['お勧めします', '感想', 'マルチ人いない', '遊んでみた'];
        $text = $this->faker->realText(100);

        return [
            'name' => $name,
            'title' => $game_name[array_rand($game_name)] . $game_action[array_rand($game_action)],
            'body' => $text,
            'genre_id' => rand(1, 33),
            'img_path' => 'storage/game_image/' . rand(1, 15) . '.jpeg',
        ];
    }
}
