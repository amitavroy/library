<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = \App\User::create([
            'name' => 'Amitav Roy',
            'email' => 'amitav.roy@focalworks.in',
            'password' => bcrypt('password'),
            'mobile_number' => '9820098200',
            'date_of_birth' => '1984-11-07',
            'address' => 'India',
            'is_active' => 1,
        ]);

        factory(\App\User::class, 10)->create();
        factory(\App\User::class, 5)->states('inactive')->create();
    }
}
