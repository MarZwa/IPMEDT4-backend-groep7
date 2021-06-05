<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VraagsoortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vraagsoorten')->insert([
            'vraagsoort' => 'Open',
        ]);

        DB::table('vraagsoorten')->insert([
            'vraagsoort' => 'Schaal',
        ]);

        DB::table('vraagsoorten')->insert([
            'vraagsoort' => 'Multiple choice',
        ]);
    }
}
