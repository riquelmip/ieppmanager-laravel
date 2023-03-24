<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayAutores =
            [
                ['nombre' => 'Congregacional', 'estado' => true],
                ['nombre' => 'Alex Zurdo', 'estado' => true],
                ['nombre' => 'Aline Barros', 'estado' => true],
                ['nombre' => 'Christine D\'Clario', 'estado' => true],
                ['nombre' => 'Coalo Zamorano', 'estado' => true],
                ['nombre' => 'Danilo Montero', 'estado' => true],
                ['nombre' => 'Daniel Calveti', 'estado' => true],
                ['nombre' => 'Danny Berrios', 'estado' => true],
                ['nombre' => 'Evan Craft', 'estado' => true],
                ['nombre' => 'Generación 12', 'estado' => true],
                ['nombre' => 'Hillsong en Español', 'estado' => true],
                ['nombre' => 'Ingrid Rosario', 'estado' => true],
                ['nombre' => 'Jesús Adrián Romero', 'estado' => true],
                ['nombre' => 'Julissa', 'estado' => true],
                ['nombre' => 'Lilly Goodman', 'estado' => true],
                ['nombre' => 'Marcela Gándara', 'estado' => true],
                ['nombre' => 'Marco Barrientos', 'estado' => true],
                ['nombre' => 'Marcos Brunet', 'estado' => true],
                ['nombre' => 'Marcos Vidal', 'estado' => true],
                ['nombre' => 'Miel San Marcos', 'estado' => true],
                ['nombre' => 'Paul Wilbur', 'estado' => true],
                ['nombre' => 'Roberto Orellana', 'estado' => true],
                ['nombre' => 'Rojo', 'estado' => true],
                ['nombre' => 'Samuel Hernández', 'estado' => true],
                ['nombre' => 'Tercer Cielo', 'estado' => true],
                ['nombre' => 'Tony Pérez', 'estado' => true],
                ['nombre' => 'Vertical', 'estado' => true],
                ['nombre' => 'Willy González', 'estado' => true]
            ];



        foreach ($arrayAutores as $autor) {
            Autor::create([
                'nombre' => $autor['nombre'],
                'estado' => $autor['estado'],
            ]);
        }
    }
}
