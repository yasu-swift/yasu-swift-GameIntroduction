<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('genres')->first()) {
            DB::table('genres')->insert([
                ['name' => 'スマホゲーム'],
                ['name' => 'PCゲーム'],
                ['name' => 'アーケードゲーム'],
                ['name' => 'インディーズゲーム'],
                ['name' => 'FPS'],
                ['name' => 'TPS'],
                ['name' => 'シューティング'],
                ['name' => 'フライトシューティング'],
                ['name' => 'アクションゲーム'],
                ['name' => 'プラットフォームゲーム'],
                ['name' => '対戦アクションゲーム'],
                ['name' => '対戦型格闘ゲーム'],
                ['name' => 'ステルスアクションゲーム'],
                ['name' => 'RPG'],
                ['name' => 'アクションRPG'],
                ['name' => 'シミュレーションRPG'],
                ['name' => 'アドベンチャー'],
                ['name' => 'アクションアドベンチャーゲーム'],
                ['name' => 'ホラーゲーム'],
                ['name' => 'レースゲーム'],
                ['name' => 'パズルゲーム'],
                ['name' => 'ターン制ストラテジー (TBS)'],
                ['name' => 'リアルタイムストラテジー (RTS)'],
                ['name' => 'タワーディフェンス'],
                ['name' => '育成ゲーム'],
                ['name' => '箱庭ゲーム'],
                ['name' => '操作ゲーム'],
                ['name' => 'サンドボックス'],
                ['name' => '音楽ゲーム'],
                ['name' => 'テーブルゲーム'],
                ['name' => 'ボードゲーム'],
                ['name' => 'カードゲーム'],
                ['name' => 'その他'],
            ]);
        }
    }
}
