<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            VragenlijstSeeder::class,
            MailgroepSeeder::class,
            EmailSeeder::class,
            CodeSeeder::class,
            VraagsoortSeeder::class,
            CategorieSeeder::class,
            VragenSeeder::class,
            AntwoordSeeder::class,
        ]);
    }
}
