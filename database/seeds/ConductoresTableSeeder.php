<?php

use Illuminate\Database\Seeder;
use Prueba\Conductor;

class ConductoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Conductor::class, 80)->create();
    }
}
