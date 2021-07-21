<?php

use App\licenciatura;
use App\Prestamo;
use App\PrestamoImage;
use Illuminate\Database\Seeder;

class PrestamoImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrestamoImage::truncate();

        $Prestamos = Prestamo::all();

        foreach($Prestamos as $key => $p){
            PrestamoImage::create([
                    'image' => "1626209036.png",
                    'prestamo_id' => $p->id,
                ]);
        }

    }
}
