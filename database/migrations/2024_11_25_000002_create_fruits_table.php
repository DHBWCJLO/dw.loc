<?php

// File: CreateFruitsTable.php
// Migration for creating the fruits table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitsTable extends Migration
{
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('origin')->constrained('countries')->onDelete('cascade');
            $table->enum('seasonality', ['Summer', 'Autumn', 'Winter', 'Spring']);
            $table->enum('storage_place', ['WoodBox', 'Fridge', 'Bottle', 'PlasticBox', 'OpenAir']);
            $table->enum('storage_period', ['Week', '2Weeks', '3Weeks', 'Month', 'Quarter', 'Year']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fruits');
    }
}
