<?php

// File: Fruit.php
// Model for Fruit
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = ['name', 'description', 'origin', 'seasonality', 'storage_place', 'storage_period'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'origin');
    }

    public function images()
    {
        return $this->hasMany(FruitImage::class);
    }
}
