<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_profile_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('image');
            $table->integer('blurred')->default(0); // 0 for unblurred, 1 for blurred
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_profile_images');
    }
};
