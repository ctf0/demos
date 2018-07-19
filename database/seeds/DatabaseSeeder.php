<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        app('cache')->flush();
        app('files')->delete(config('simpleMenu.routeListPath'));

        factory(config('simpleMenu.models.user'), 10)->create();

        $this->call(PagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuPagesTableSeeder::class);
        $this->call(RolePermSeeder::class);
    }
}
