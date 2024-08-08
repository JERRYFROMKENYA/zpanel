<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('plan_purchase_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('plan_id');
            $table->text('p_name');
            $table->dateTime('t_date');
            $table->integer('amount');
            $table->integer('day');
            $table->text('plan_title');
            $table->text('plan_description');
            $table->date('expire_date');
            $table->date('start_date');
            $table->text('trans_id');
            $table->unsignedBigInteger('p_method_id');
            $table->timestamps();

           ;
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_purchase_histories');
    }
};
