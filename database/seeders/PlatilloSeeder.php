<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Platillo::create([
            'nombre_platillo' => 'Camarones empanizados',
            'tam_platillo' => 'G',
            'precio_platillo' => '145',
            'descripcion_platillo' => 'Camarones preparados con pan molido, acompañados de ensalada, arroz y verduras cocidas.',
            'user_id' => '1',
        ]);

        Platillo::create([
            'nombre_platillo' => 'Aguachile',
            'tam_platillo' => 'G',
            'precio_platillo' => '145',
            'descripcion_platillo' => 'Camarones preparados en jugo de limón, acompañados de pepino picado, cebolla morada y salsa picante al gusto.',
            'user_id' => '1',
        ]);

        Platillo::create([
            'nombre_platillo' => 'Filete a la mantequilla',
            'tam_platillo' => 'G',
            'precio_platillo' => '95',
            'descripcion_platillo' => 'Filete de pescado preparado a la mantequilla con especias, acompañado de ensalada, arroz y verduras cocidas.',
            'user_id' => '2',
        ]);

        Platillo::create([
            'nombre_platillo' => 'Coctel de Camarón',
            'tam_platillo' => 'M',
            'precio_platillo' => '95',
            'descripcion_platillo' => 'Clasico coctel de camarón cocido, acompañado de verduras, tostada y galleta.',
            'user_id' => '2',
        ]);
    }
}
