<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('game_id')->unsigned();    // 正負の符号無し属性を設定
            $table->foreign('game_id')                    // game_idに外部キーを設定する
                ->references('id')->on('games')       // gamesテーブルのidカラムを外部キーにする
                ->onDelete('cascade');                      // 参照先のデータが削除されたら、一緒に削除する
            $table->string('img_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
