<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Truncate existing records
      User::truncate();

      $faker = \Faker\Factory::create();

      // Everyone has the same password for speed reasons
      $password = Hash::make('mypassword');

      // Create an admin user
      User::create([
        'name' => 'Administrator',
        'email' => 'admin@test.com',
        'password' => $password
      ]);

      // Generate other users
      for ($i=0; $i<10; $i++) {
        User::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'password' => $password
        ]);
      }
    }
}
