<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_setting', function (Blueprint $table) {
            $table->id();
            $table->text('webname');
            $table->text('weblogo');
            $table->text('timezone');
            $table->text('currency');
            $table->text('one_key');
            $table->text('one_hash');
            $table->integer('show_dark')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_setting');
    }
};
