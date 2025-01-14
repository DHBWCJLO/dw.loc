<?php

// File: CountriesTableSeeder.php
// Seeder for Countries
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            // Europe
            ['name' => 'Germany', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'France', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Italy', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Spain', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'United Kingdom', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Netherlands', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Poland', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Sweden', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Norway', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Greece', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Portugal', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            ['name' => 'Switzerland', 'continent' => 'Europe', 'hemisphere' => 'Northern'],
            // Africa
            ['name' => 'Kenya', 'continent' => 'Africa', 'hemisphere' => 'Southern'],
            ['name' => 'Nigeria', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Egypt', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'South Africa', 'continent' => 'Africa', 'hemisphere' => 'Southern'],
            ['name' => 'Morocco', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Ethiopia', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Ghana', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Uganda', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Algeria', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Sudan', 'continent' => 'Africa', 'hemisphere' => 'Northern'],
            ['name' => 'Tanzania', 'continent' => 'Africa', 'hemisphere' => 'Southern'],
            // Asia
            ['name' => 'India', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'China', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Japan', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Indonesia', 'continent' => 'Asia', 'hemisphere' => 'Southern'],
            ['name' => 'Pakistan', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Bangladesh', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'South Korea', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Vietnam', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Philippines', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            ['name' => 'Thailand', 'continent' => 'Asia', 'hemisphere' => 'Northern'],
            // South America
            ['name' => 'Argentina', 'continent' => 'South America', 'hemisphere' => 'Southern'],
            ['name' => 'Chile', 'continent' => 'South America', 'hemisphere' => 'Southern'],
            ['name' => 'Colombia', 'continent' => 'South America', 'hemisphere' => 'Northern'],
            ['name' => 'Peru', 'continent' => 'South America', 'hemisphere' => 'Southern'],
            ['name' => 'Venezuela', 'continent' => 'South America', 'hemisphere' => 'Northern'],
            ['name' => 'Bolivia', 'continent' => 'South America', 'hemisphere' => 'Southern'],
            // Central and North America
            ['name' => 'Mexico', 'continent' => 'North America', 'hemisphere' => 'Northern'],
            ['name' => 'Cuba', 'continent' => 'North America', 'hemisphere' => 'Northern'],
            ['name' => 'Guatemala', 'continent' => 'North America', 'hemisphere' => 'Northern']
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
