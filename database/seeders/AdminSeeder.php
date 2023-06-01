<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime = now();

        Admin::insert([[
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $currentDateTime,
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]]);
    }
}
