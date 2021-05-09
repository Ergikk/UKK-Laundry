<?php

use Illuminate\Database\Seeder;
use App\JenisMenu;

class JenisMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisMenu::create(['nama' => 'Biasa']);
        JenisMenu::create(['nama' => 'Kilat']);
    }
}
