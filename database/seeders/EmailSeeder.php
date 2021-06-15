<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emailadressen')->insert([
            'mailgroep-id' => 1,
            'email' => "testemail@invuller.com"
        ]);

        DB::table('emailadressen')->insert([
            'mailgroep-id' => 1,
            'email' => "testemail2@invuller.com"
        ]);

        DB::table('emailadressen')->insert([
            'mailgroep-id' => 1,
            'email' => "testemail3@invuller.com"
        ]);

        DB::table('emailadressen')->insert([
            'mailgroep-id' => 1,
            'email' => "testemail4@invuller.com"
        ]);

        DB::table('emailadressen')->insert([
            'mailgroep-id' => 1,
            'email' => "testemail5@invuller.com"
        ]);
    }
}
