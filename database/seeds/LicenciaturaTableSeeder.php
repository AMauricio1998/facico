<?php

use App\licenciatura;
use Illuminate\Database\Seeder;

class LicenciaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        licenciatura::truncate();

        for($i = 1; $i<=20; $i++){
            
            licenciatura::create([
                'nombre' => "Licenciatura $i",
            ]);
        }

        
    }
}
