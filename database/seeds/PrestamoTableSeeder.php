<?php

use App\licenciatura;
use App\Prestamo;
use Illuminate\Database\Seeder;

class PrestamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::truncate();

        $licenciaturas = licenciatura::all();

        foreach($licenciaturas as $key => $c){
            for($i = 1; $i<=20; $i++){
                Prestamo::create([
                    'nombre' => "nombre $i $key",
                    'apellidos' => "Licenciatura $i $key",
                    'telefono' => 7224338552,
                    'num_cuenta' => 1592367,
                    'email' => "example@gmail.com",
                    'licenciatura_id' => $c->id,
                    'insumo' => "cañon $i",
                    'fecha_pres' => "2021-07-18",
                    'hora_pres' => "18:44:50",
                    'fecha_dev' => "2021-07-18",
                    'hora_dev' => "18:44:50",
                    'activo' => 1
                ]);
            }
        }

        
    }
}
