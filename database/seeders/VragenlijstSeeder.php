<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;

class VragenlijstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vragenlijst')->insert([
            'name' => "Test Vragenlijst",
            'eigenaar-id' => 1,
            'link' => 'testlink.com',
        ]);

        DB::table('vragenlijst')->insert([
            'name' => "Vragenlijst twee",
            'eigenaar-id' => 1,
            'link' => 'testlink.com',
        ]);
    }
}
