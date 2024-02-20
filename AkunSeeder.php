<?php
// Terminal: php artisan make:seeder AkunSeeder
// Location: database > seeders
// Selesai: php artisan db:seed

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nama Pengguna',
            'email' => 'email@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
