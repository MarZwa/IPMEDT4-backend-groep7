<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MailgroepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mailgroep')->insert([
            'eigenaar-id' => 1,
            'name' => "Demo Mailgroep",
        ]);

        DB::table('mailgroep')->insert([
            'eigenaar-id' => 1,
            'name' => "Test Mailgroep Twee",
        ]);

        DB::table('mailgroep')->insert([
            'eigenaar-id' => 2,
            'name' => "Test Mailgroep Drie",
        ]);
    }
}
