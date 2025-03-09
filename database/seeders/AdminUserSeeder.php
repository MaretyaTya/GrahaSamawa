<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::updateOrCreate([
            'username' => 'admin_grahasamawa',
        ], [
            'name' => 'admin',
            'email' => 'admin@grahasamawa.com',
            'password' => Hash::make('45uksesSel@lu'),
        ]);
    }
}
