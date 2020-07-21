<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Usuario admin',
            'email' => 'admin@admin.com',
            'role' => 1,
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Usuario Vendedor',
            'email' => 'venedor@admin.com',
            'role' => 2,
            'password' => Hash::make('123456')
        ]);
    }
}
