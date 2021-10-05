<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'スパルタ太郎',
                'title' => 'おすすめゲーム',
                'body' => '私のおすすめのゲームは、ファイナルファンタジーです。面白かったです',
                // 'tag' => '攻略',
                'genre' => '1',
                // 'image_url' => 'storage/game_image/1.jpg'
            ],
            [
                'name' => 'キャンプ鈴木',
                'title' => '発売日楽しみなゲーム',
                'body' => '私が次に買うゲームは、ドラゴンクエスト16です。生きている内には遊びたいです',
                // 'tag' => '感想',
                'genre' => '2',
                // 'image_url' => 'storage/game_image/2.jpg'
            ],
        ]);
    }
}
