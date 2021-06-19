<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AntwoordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('antwoorden')->insert([
            'vraag-id' => 1,
            'antwoord' => 'Ja, hij werkt!',
        ]);

        DB::table('antwoorden')->insert([
            'vraag-id' => 1,
            'antwoord' => 'Ja, hij werkt!',
        ]);

        DB::table('antwoorden')->insert([
            'vraag-id' => 2,
            'antwoord' => 'Ja, hij werkt!',
        ]);
    }
}
