<?php

// File: CreateFruitImagesTable.php
// Migration for creating the fruit images table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitImagesTable extends Migration
{
    public function up()
    {
        Schema::create('fruit_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fruit_id')->constrained('fruits')->onDelete('cascade');
            $table->string('filename');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fruit_images');
    }
}
