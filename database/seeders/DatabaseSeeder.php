<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table("productos_pedidos") -> truncate();
        DB::table("productos_usuarios") -> truncate();
        DB::table("pedidos") -> truncate();
        DB::table("productos") -> truncate();
        DB::table("tipo_productos") -> truncate();
        DB::table("usuarios") -> truncate();
        DB::table("sensores") -> truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

       $this->call([
           ProductoPedidoSeeder::class,
           ProductoUsuarioSeeder::class,
           PedidoSeeder::class,
           ProductoSeeder::class,
           TipoProductoSeeder::class,
           UsuarioSeeder::class,
           DatosSensoresSeeder::class,
           SensorSeeder::class
       ]);
    }
}
