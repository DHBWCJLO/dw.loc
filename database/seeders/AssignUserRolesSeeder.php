<?php

// Seeder File: AssignUserRolesSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AssignUserRolesSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'administrator']);
        $employeeRole = Role::firstOrCreate(['name' => 'employee']);
        $buyerRole = Role::firstOrCreate(['name' => 'buyer']);

        // Assign roles to users
        $users = User::all();

        if ($users->count() >= 8) {
            $users->take(2)->each(function ($user) use ($adminRole) {
                $user->roles()->attach($adminRole);
            });

            $users->skip(2)->take(6)->each(function ($user) use ($employeeRole) {
                $user->roles()->attach($employeeRole);
            });

            $users->skip(8)->each(function ($user) use ($buyerRole) {
                $user->roles()->attach($buyerRole);
            });
        }
    }
}