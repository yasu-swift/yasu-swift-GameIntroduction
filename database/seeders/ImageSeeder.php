<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 配列を初期化
        $data = [];
        // ゲームテーブルのデータ数分繰り返す
        foreach (\App\Models\Game::all() as $r) {
            // 記事毎に3枚の画像を登録する
            for ($i = 0; $i < 12; $i++) {
                // 配列に追加していく
                $data[] = [
                    'game_id' => $r->id,
                    'img_path' => 'storage/game_image/' . rand(1, 15) . '.jpeg',
                ];
            }
        }
        // 配列をinsertで登録する
        DB::table('images')->insert($data);
    }
}
