<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
          [
            'title' => 'mr',
            'name' => 'ben',
            'last_name' => 'were',
            'address' => '212',
            'zip_code' => '001',
            'city' => 'atlanta',
            'state' => 'georgia',
            'email' => 'ben@example.com',
          ]
        );

        DB::table('clients')->insert(
          [
            'title' => 'mrs',
            'name' => 'kelly',
            'last_name' => 'wells',
            'address' => '309',
            'zip_code' => '020',
            'city' => 'chicago',
            'state' => 'illinois',
            'email' => 'kelly@example.com',
          ]
        );

    }
}
