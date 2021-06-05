<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie')->insert([
            'category' => "Test categorie",
            'user-id' => 1
        ]);
    }
}
