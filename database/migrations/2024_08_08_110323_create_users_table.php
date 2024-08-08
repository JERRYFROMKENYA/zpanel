<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('remember_token')->nullable();
            $table->date('dob')->nullable();
            $table->integer('height')->nullable();
            $table->unsignedBigInteger('relation_goal_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
