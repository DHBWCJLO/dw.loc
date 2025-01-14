<?php

// File: FruitImage.php
// Model for FruitImage
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FruitImage extends Model
{
    protected $fillable = ['fruit_id', 'filename'];

    public function fruit()
    {
        return $this->belongsTo(Fruit::class);
    }
}
