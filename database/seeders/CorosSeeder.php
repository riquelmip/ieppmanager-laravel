<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Coro;
use Asm89\Stack\Cors;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CorosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 20; $i++) {
            Coro::create([
                'tipo_coro' => rand(0, 1),
                'nombre' => 'Coro ' . ($i + 1),
                "slug" => Str::slug('Coro ' . ($i + 1)),
                'id_autor' => rand(1, 10),
                'letra' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat metus et libero laoreet, non interdum sapien malesuada. Vivamus non justo vel libero hendrerit venenatis. Nullam cursus, mi vel hendrerit interdum, massa sapien elementum purus, quis lacinia sapien metus vel eros.',
                'nota' => 'C',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
