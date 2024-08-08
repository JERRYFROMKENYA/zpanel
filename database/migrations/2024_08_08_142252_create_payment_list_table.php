<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_payment_list', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('img');
            $table->text('attributes');
            $table->integer('status')->default(1);
            $table->text('subtitle')->nullable();
            $table->integer('p_show');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_payment_list');
    }
};
