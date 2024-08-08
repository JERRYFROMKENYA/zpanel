<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('notification');
            $table->integer('read_status')->default(0); // 0 for unread, 1 for read
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_notifications');
    }
};
