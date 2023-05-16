<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = ['TREK', 'SHIMANO', 'CUBE', 'SRAM', 'CAMPAGNOLO', 'GIANT'];

        foreach($marcas as $marca) {
            DB::table('marcas')->insert([
                'nombre' => $marca
            ]);
        }
    }
}
