<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'nama' => 'Paket 5 kg Cuci Setrika',
            'harga' => '25000',
            'id_jenis_menu' => 1
        ]);

        Menu::create([
            'nama' => 'Paket 5 kg Cuci Setrika',
            'harga' => '32000',
            'id_jenis_menu' => 2
        ]);

        Menu::create([
            'nama' => 'Paket 3 kg Cuci Setrika',
            'harga' => '16000',
            'id_jenis_menu' => 1
        ]);

        Menu::create([
            'nama' => 'Paket 3 kg Cuci Setrika',
            'harga' => '22000',
            'id_jenis_menu' => 2
        ]);

        Menu::create([
            'nama' => 'Paket 5 kg Setrika',
            'harga' => '15000',
            'id_jenis_menu' => 1
        ]);

        Menu::create([
            'nama' => 'Paket 5 kg Setrika',
            'harga' => '20000',
            'id_jenis_menu' => 2
        ]);
        
        Menu::create([
            'nama' => 'Paket 3 kg Setrika',
            'harga' => '12000',
            'id_jenis_menu' => 1
        ]);

        Menu::create([
            'nama' => 'Paket 3 kg Setrika',
            'harga' => '16000',
            'id_jenis_menu' => 2
        ]);
    }
}
