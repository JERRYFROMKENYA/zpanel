<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_1_id');
            $table->unsignedBigInteger('user_2_id');
            $table->text('message');
            $table->dateTime('sent_time');
            $table->integer('status')->default(1);
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_chats');
    }
};
