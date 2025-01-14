<?php

// File: Country.php
// Model for Country
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'continent', 'hemisphere'];
}
