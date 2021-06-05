<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'code' => "AAA333",
            'vragenlijst-id' => "1",
            'used' => 0,
            'questions_answered' => 0,
        ]);
    }
}
