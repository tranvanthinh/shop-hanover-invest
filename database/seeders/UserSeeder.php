<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::updateOrCreate(
            [
                'email' => 'admin@shopinvest.dev.com',
            ],
            [
                'name'              => 'Administrator',
                'email_verified_at' => now(),
                'password'          => bcrypt(123456),
                'remember_token'    => Str::random(10),
            ]
        );
    }
}
