<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table("productos_pedidos") -> truncate();
        $sql = database_path('proyectoweb22_productos_pedidos.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
