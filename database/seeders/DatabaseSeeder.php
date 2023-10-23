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
        // \App\Models\User::factory(10)->create();
        $this->call(RolesPermisosSeeder::class);
        $this->call(AutoresSeeder::class);
        $this->call(TiposDirectivasSeeder::class);
        $this->call(CorosSeeder::class);
    }
}
