<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => 'saira sanceno',
            "email" => 'guevarax72@gmail.com',
            'password' => bcrypt('12345678')
       ])->assignRole('admin');
       User::factory(9)->create();


       User::create([
           "name" => 'saira guevara',
           "email" => 'sairaxiomara2003@gmail.com',
           'password' => bcrypt('12345678')
      ])->assignRole('usuario');
      User::factory(9)->create();
    }
}