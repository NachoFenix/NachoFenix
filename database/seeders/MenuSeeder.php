<?php

namespace Database\Seeders;

use App\Models\Backend\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = array(
            array(
                "id" => 1,
                "menus_id" => NULL,
                "nombre" => "Dashboard",
                "url" => "dashboard",
                "orden" => 1,
                "icono" => "mdi mdi-view-dashboard",
                "created_at" => "2021-10-01 18:42:45",
                "updated_at" => "2021-10-01 18:44:22",
            ),
            array(
                "id" => 2,
                "menus_id" => NULL,
                "nombre" => "Navegacion",
                "url" => "javascript();",
                "orden" => 2,
                "icono" => "mdi mdi-compass",
                "created_at" => "2021-10-01 18:43:24",
                "updated_at" => "2021-10-01 18:45:01",
            ),
            array(
                "id" => 3,
                "menus_id" => 2,
                "nombre" => "Menu",
                "url" => "menu",
                "orden" => 1,
                "icono" => "mdi mdi-menu",
                "created_at" => "2021-10-01 18:43:46",
                "updated_at" => "2021-10-01 18:44:22",
            ),
            array(
                "id" => 4,
                "menus_id" => 2,
                "nombre" => "Menu Rol",
                "url" => "menu-rol",
                "orden" => 2,
                "icono" => "mdi mdi-account",
                "created_at" => "2021-10-01 18:44:05",
                "updated_at" => "2021-10-01 18:44:22",
            ),
        );
        
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('menus')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        foreach ($menus as $item ) {
            Menu::create([
                'id' => $item['id'],
                'menus_id' => $item['menus_id'],
                'nombre' => $item['nombre'],
                'url' => $item['url'],
                'orden' => $item['orden'],
                'icono' => $item['icono']
            ]);
        }
    }
}
