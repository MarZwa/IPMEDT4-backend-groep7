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
            'name' => "Tevredenheidsonderzoek 2020",
            'eigenaar-id' => 1,
            'link' => 'testlink.com',
        ]);

        DB::table('vragenlijst')->insert([
            'name' => "Tevredenheidsonderzoek 2021",
            'eigenaar-id' => 1,
            'link' => 'testlink.com',
        ]);
    }
}
