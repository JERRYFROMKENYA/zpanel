<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_app_user', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('mobile');
            $table->text('password');
            $table->dateTime('rdate');
            $table->integer('status')->default(1);
            $table->text('ccode');
            $table->integer('code');
            $table->integer('refercode')->nullable();
            $table->float('wallet')->default(0);
            $table->text('email');
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER']);
            $table->text('lats');
            $table->text('longs');
            $table->text('profile_bio')->nullable();
            $table->text('profile_pic')->nullable();
            $table->date('birth_date');
            $table->text('search_preference');
            $table->text('radius_search');
            $table->integer('relation_goal');
            $table->text('interest');
            $table->text('language');
            $table->integer('religion');
            $table->longText('other_pic');
            $table->integer('plan_id')->default(0);
            $table->dateTime('plan_start_date')->nullable();
            $table->dateTime('plan_end_date')->nullable();
            $table->integer('is_subscribe')->default(0);
            $table->integer('history_id')->default(0);
            $table->longText('height')->nullable();
            $table->text('identity_picture')->nullable();
            $table->integer('is_verify')->default(0);
            $table->integer('direct_audio')->default(1);
            $table->integer('direct_video')->default(1);
            $table->integer('direct_chat')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_app_user');
    }
};
