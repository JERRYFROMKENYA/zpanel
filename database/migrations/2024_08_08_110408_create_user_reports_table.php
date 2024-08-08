<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reporting_user_id');
            $table->unsignedBigInteger('reported_user_id');
            $table->text('reason');
            $table->integer('status')->default(1);
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_reports');
    }
};
