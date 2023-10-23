<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\TipoDirectiva;
use Illuminate\Database\Seeder;

class TiposDirectivasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =
            [
                ['nombre' => 'General', 'estado' => true],
                ['nombre' => 'Unión Femenil', 'estado' => true],
                ['nombre' => 'Consejeros', 'estado' => true],
                ['nombre' => 'Jóvenes', 'estado' => true],
                ['nombre' => 'Escuela Bíblica', 'estado' => true]
            ];



        foreach ($array as $tipo) {
            TipoDirectiva::create([
                'nombre' => $tipo['nombre'],
                'estado' => $tipo['estado'],
            ]);
        }
    }
}
