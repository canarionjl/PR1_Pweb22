<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table("usuarios") -> truncate();
        $sql = database_path('proyectoweb22_usuarios.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
