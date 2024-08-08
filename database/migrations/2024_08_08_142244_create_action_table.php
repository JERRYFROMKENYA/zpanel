<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_action', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('profile_id');
            $table->enum('action', ['LIKE', 'UNLIKE', 'VIEW', 'BLOCK']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_action');
    }
};
