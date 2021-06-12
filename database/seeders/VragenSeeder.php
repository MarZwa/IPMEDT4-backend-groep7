<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VragenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vraag')->insert([
            'vragenlijst-id' => 1,
            'vraag' => 'Werkt deze vraag?',
            'vraagsoort' => 1,
            'opties' => '',
            'categorie' => 1
        ]);

        DB::table('vraag')->insert([
            'vragenlijst-id' => 1,
            'vraag' => 'Hoe eens ben je het?',
            'vraagsoort' => 2,
            'opties' => '',
            'categorie' => 1
        ]);

        DB::table('vraag')->insert([
            'vragenlijst-id' => 1,
            'vraag' => 'Multiple choice?',
            'vraagsoort' => 3,
            'opties' => 'Henk,Ingrid,Klaas',
            'categorie' => 1
        ]);
    }
}
