<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::truncate();
        
        Customer::create([
            'name' => 'Juan',
            'document' => '12552255',
            'email' => 'camilo@gmail.com',
            'address' => 'calle falsa 123',
        ]);

        Customer::create([
            'name' => 'Andres',
            'document' => '65656565',
            'email' => 'andres@gmail.com',
            'address' => 'calle falsa 1234',
        ]);
    }
}
