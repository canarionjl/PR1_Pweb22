<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table("productos_usuarios") -> truncate();
        $sql = database_path('proyectoweb22_productos_usuarios.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
