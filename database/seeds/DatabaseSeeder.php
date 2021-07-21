<?php

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
         $this->call(LicenciaturaTableSeeder::class);
         $this->call(PrestamoTableSeeder::class);
         $this->call(PrestamoImageTableSeeder::class);
         $this->call(ContactTableSeeder::class);
    }
}
