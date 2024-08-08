<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('document_type');
            $table->string('document_number');
            $table->string('document_image');
            $table->integer('status')->default(1);
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_documents');
    }
};
