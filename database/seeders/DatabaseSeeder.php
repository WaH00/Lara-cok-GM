<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\barang;
use App\Models\kategori;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // tabel kategori
        kategori::create(['name'=>'Sayur']);
        kategori::create(['name'=>'Daging']);
        kategori::create(['name'=>'Buah']);
        kategori::create(['name'=>'Rempah']);   
        
        // tabel sayur
        barang::create(['category_id'=>1, 'name'=>'Brokoli[1KG]', 'price'=>40000,'stock'=>100,'photo'=>'image/produk/sayur/sayur1.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Bayam [300gr]', 'price'=>20000, 'stock'=>100, 'photo'=>'image/produk/sayur/sayur2.jpg']);

        
    }
}
