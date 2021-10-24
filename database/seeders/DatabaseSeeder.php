<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ks = new KompanijaSeeder();
        $ks->run();
        $zs = new ZaposleniSeeder();
        $zs->run();
    }
}
