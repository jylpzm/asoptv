<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('song_id')->nullable();
            $table->string('song_title');
            $table->binary('audio_file');
            $table->binary('lyrics_file');
            $table->string('notes');
            $table->string('song_genre')->nullable();
            $table->string('AdminRemark')->nullable();
            $table->integer('isRead')->nullable();
            $table->integer('status')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('songs');
    }
}
