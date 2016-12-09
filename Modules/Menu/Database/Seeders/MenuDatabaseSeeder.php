<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\Menu;

class MenuDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Menu::truncate();

        Menu::create([
            'name' => 'Cégünkről',
            'url' => 'cegunkrol',
            'order' => 1
        ]);

        Menu::create([
            'name' => 'Termékeink',
            'url' => 'termekeink',
            'order' => 2
        ]);

        Menu::create([
            'name' => 'Szolgáltatások',
            'url' => 'szolgaltatasok',
            'order' => 3
        ]);

        Menu::create([
            'name' => 'Kapcsolat',
            'url' => 'kapcsolat',
            'order' => 4
        ]);
    }
}
