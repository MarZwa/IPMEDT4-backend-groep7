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
    }
}
