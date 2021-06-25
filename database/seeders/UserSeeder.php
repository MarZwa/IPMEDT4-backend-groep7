<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Demo User",
            'email' => "demo@demo.com",
            'password' => bcrypt('password'),
            'organisatie' => 'demo Organisatie',
        ]);

        DB::table('users')->insert([
            'name' => "Test User Twee",
            'email' => "Tweetest@test.com",
            'password' => bcrypt('password'),
            'organisatie' => 'Tweede Organisatie',
        ]);
    }
}
