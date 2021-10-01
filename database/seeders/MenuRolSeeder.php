<?php

namespace Database\Seeders;

use App\Models\Backend\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus_roles = array(
            array(
                "menus_id" => 1,
                "roles_id" => 1,
            ),
            array(
                "menus_id" => 2,
                "roles_id" => 1,
            ),
            array(
                "menus_id" => 3,
                "roles_id" => 1,
            ),
            array(
                "menus_id" => 4,
                "roles_id" => 1,
            ),
        );
        
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('menus_roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        foreach ($menus_roles as $item ) {
            $menu = Menu::find($item['menus_id']);
            $menu->roles()->attach($item['roles_id']);
        }
    }
}
