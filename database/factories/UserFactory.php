<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public static function randomEmailDomains($emailStr): string
    {
        $domains = ['heidenheim', 'munich', 'berlin', 'hamburg', 'frankfurt', 'dortmund', 'stuttgart', 'essen', 'dusseldorf'];
        $extension = ['com', 'net', 'org', 'de', 'eu', 'edu', 'gov', 'biz', 'email', 'info'];
        $randomDomain = $domains[array_rand($domains)];
        $randomExtension = $extension[array_rand($extension)];
        return preg_replace('/@example\.\w+$/', '@' . $randomDomain . '.' . $randomExtension, $emailStr);
    }

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => self::randomEmailDomains(fake()->unique()->safeEmail()),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // default password
            'remember_token' => Str::random(30),
        ];
    }
}
