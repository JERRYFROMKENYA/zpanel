<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_chat_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('requester_user_id');
            $table->unsignedBigInteger('requested_user_id');
            $table->integer('status')->default(0); // 0 for pending, 1 for accepted, 2 for declined
            $table->dateTime('request_date');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_chat_requests');
    }
};
