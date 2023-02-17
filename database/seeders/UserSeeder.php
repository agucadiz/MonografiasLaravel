<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@admin',
            'email_verified_at' => null,
            'password' => '$2y$10$9Ud1hWHklD3gzoDXlymoXucPIJBVrxnYHHZ0NvYpLVvO5R3zfBV12', //admin
            'remember_token' => null,
        ]);
        $user->save();
    }
}
