<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Lucas',
                'lastname' => 'Bozzolo',
                'email' => 'lucas@verticedigital.com.ar',
                'password' => Hash::make('golf'),
                'created_at' => date_create(),
                'updated_at' => date_create()
            ],
            [
                'name' => 'Fernando',
                'lastname' => 'Alfonso',
                'email' => 'fernando@verticedigital.com.ar',
                'password' => Hash::make('1234'),
                'created_at' => date_create(),
                'updated_at' => date_create()
            ],
        ]);

    }
}
