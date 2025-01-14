<?php

// File: CreateCountriesTable.php
// Migration for creating the countries table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('continent', ['Africa', 'Asia', 'Europe', 'North America', 'South America', 'Australia', 'Antarctica']);
            $table->enum('hemisphere', ['Northern', 'Southern', 'Both']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
