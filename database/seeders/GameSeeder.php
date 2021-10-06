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
                'genre' => '1',
            ],
            [
                'name' => 'キャンプ鈴木',
                'title' => '発売日楽しみなゲーム',
                'body' => '私が次に買うゲームは、ドラゴンクエスト16です。生きている内には遊びたいです',
                'genre' => '2',
            ],
        ]);
    }
}
