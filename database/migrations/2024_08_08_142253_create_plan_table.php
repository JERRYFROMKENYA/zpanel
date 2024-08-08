<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_plan', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->float('amt');
            $table->text('description');
            $table->integer('filter_include');
            $table->integer('day_limit');
            $table->integer('direct_chat');
            $table->integer('Like_menu');
            $table->integer('audio_video');
            $table->integer('status');
            $table->integer('chat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_plan');
    }
};
