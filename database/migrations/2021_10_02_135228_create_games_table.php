<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title');
            $table->text('body');
            $table->unsignedInteger('genre_id')->nullable();
            $table->foreign('genre_id')              // genre_idに外部キーを設定する
                ->references('id')->on('genres')    // genresテーブルのidカラムを外部キーにする
                ->onDelete('restrict')->nullable();                 // 参照先の削除を禁止する
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
        Schema::dropIfExists('games');
    }
}
