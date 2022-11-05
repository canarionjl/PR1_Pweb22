<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table("pedidos") -> truncate();
        $sql = database_path('proyectoweb22_pedidos.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
