<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        barang::create(['category_id'=>1, 'name'=>'Brokoli[1KG]', 'price'=>40000,'stock'=>90,'photo'=>'../image/produk/sayur/sayur1.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Bayam[300gr]', 'price'=>20000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur2.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Wortel[500gr]', 'price'=>30000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur3.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Tomat[500gr]', 'price'=>35000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur4.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Mentimun[500gr]', 'price'=>15000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur5.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Asparagus[500gr]', 'price'=>44000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur6.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Kangkung[1kg]', 'price'=>30000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur7.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Cabai Rawit[1kg]', 'price'=>100000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur8.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Seledri[100Gr]', 'price'=>25000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur9.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Selada[500Gr]', 'price'=>25000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur10.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Sayur Kol[1KG]', 'price'=>40000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur11.jpg']);
        barang::create(['category_id'=>1, 'name'=>'Buncis[500Gr]', 'price'=>66000, 'stock'=>100, 'photo'=>'../image/produk/sayur/sayur12.jpg']);
        
        // tabel daging
        barang::create(['category_id'=>2,'name'=>'Daging Sapi[1KG]', 'price'=>40000, 'stock'=>100,'photo'=>'../image/produk/daging/daging1.jpg']);
        barang::create(['category_id'=>2,'name'=>'Ayam Kampung[1KG]', 'price'=>55000, 'stock'=>100,'photo'=>'../image/produk/daging/daging2.jpg']);
        barang::create(['category_id'=>2,'name'=>'Ayam Boiler[1KG]', 'price'=>35500, 'stock'=>100,'photo'=>'../image/produk/daging/daging3.jpg']);
        barang::create(['category_id'=>2,'name'=>'Paha Ayam[1KG]', 'price'=>55000, 'stock'=>100,'photo'=>'../image/produk/daging/daging4.jpg']);
        barang::create(['category_id'=>2,'name'=>'Sayap Ayam[1KG]', 'price'=>35000, 'stock'=>100,'photo'=>'../image/produk/daging/daging5.jpg']);
        barang::create(['category_id'=>2,'name'=>'Dada Ayam[1KG]', 'price'=>50000, 'stock'=>100,'photo'=>'../image/produk/daging/daging6.jpg']);
        barang::create(['category_id'=>2,'name'=>'Beacon[500KG]', 'price'=>75000, 'stock'=>100,'photo'=>'../image/produk/daging/daging7.jpg']);
        barang::create(['category_id'=>2,'name'=>'Iga Sapi[500Gr]', 'price'=>55000, 'stock'=>100,'photo'=>'../image/produk/daging/daging8.jpg']);
        barang::create(['category_id'=>2,'name'=>'Pork Belly[1KG]', 'price'=>80000, 'stock'=>100,'photo'=>'../image/produk/daging/daging9.jpg']);
        barang::create(['category_id'=>2,'name'=>'Iga Babi[1KG]', 'price'=>110000, 'stock'=>100,'photo'=>'../image/produk/daging/daging10.jpg']);
        barang::create(['category_id'=>2,'name'=>'Tenderloin[1KG]', 'price'=>240000, 'stock'=>100,'photo'=>'../image/produk/daging/daging11.jpg']);
        barang::create(['category_id'=>2,'name'=>'Sirloin[1KG]', 'price'=>240000, 'stock'=>100,'photo'=>'../image/produk/daging/daging12.jpg']);

        // tabel buah
        barang::create(['category_id'=>3,'name'=>'Apel[1KG]', 'price'=>40000, 'stock'=>100,'photo'=>'../image/produk/buah/buah1.jpg']);
        barang::create(['category_id'=>3,'name'=>'Jeruk[1KG]', 'price'=>35000, 'stock'=>100,'photo'=>'../image/produk/buah/buah2.jpg']);
        barang::create(['category_id'=>3,'name'=>'Lemon[100Gr]', 'price'=>12000, 'stock'=>100,'photo'=>'../image/produk/buah/buah3.jpg']);
        barang::create(['category_id'=>3,'name'=>'JerukNipis [100Gr]', 'price'=>10000, 'stock'=>100,'photo'=>'../image/produk/buah/buah4.jpg']);
        barang::create(['category_id'=>3,'name'=>'Pisang[1KG]', 'price'=>70000, 'stock'=>100,'photo'=>'../image/produk/buah/buah5.jpg']);
        barang::create(['category_id'=>3,'name'=>'Semangka[1KG]', 'price'=>35000, 'stock'=>100,'photo'=>'../image/produk/buah/buah6.jpg']);
        barang::create(['category_id'=>3,'name'=>'Tomat[500Gr]', 'price'=>20000, 'stock'=>100,'photo'=>'../image/produk/buah/buah7.jpg']);
        barang::create(['category_id'=>3,'name'=>'Mangga[1KG]', 'price'=>55000, 'stock'=>100,'photo'=>'../image/produk/buah/buah8.jpg']);
        barang::create(['category_id'=>3,'name'=>'Nenas[100Gr]', 'price'=>20000, 'stock'=>100,'photo'=>'../image/produk/buah/buah9.jpg']);
        barang::create(['category_id'=>3,'name'=>'Pir[1KG]', 'price'=>66000, 'stock'=>100,  'photo'=>'../image/produk/buah/buah10.jpg']);
        barang::create(['category_id'=>3,'name'=>'StarwBerry[200Gr]', 'price'=>30000, 'stock'=>100,'photo'=>'../image/produk/buah/buah11.jpg']);
        barang::create(['category_id'=>3,'name'=>'Amer[500Gr]', 'price'=>40000, 'stock'=>100,'photo'=>'../image/produk/buah/buah12.jpg']);

        barang::create(['category_id'=>4,'name'=>'Lada Hitam[100Gr]', 'price'=>25000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah1.jpg']);
        barang::create(['category_id'=>4,'name'=>'Jahe[250Gr]', 'price'=>15000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah2.jpg']);
        barang::create(['category_id'=>4,'name'=>'Lada Putih[200Gr]', 'price'=>30000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah3.jpg']);
        barang::create(['category_id'=>4,'name'=>'Lengkuas[150Gr]', 'price'=>20000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah4.jpg']);
        barang::create(['category_id'=>4,'name'=>'Kunyit[500Gr]', 'price'=>40000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah5.jpg']);
        barang::create(['category_id'=>4,'name'=>'Kencur[250Gr]', 'price'=>35000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah6.jpg']);
        barang::create(['category_id'=>4,'name'=>'Pala[100Gr]', 'price'=>10000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah7.jpg']);
        barang::create(['category_id'=>4,'name'=>'Kemiri Biji[100Gr]', 'price'=>12000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah8.jpg']);
        barang::create(['category_id'=>4,'name'=>'Ketumbar Biji[100Gr]', 'price'=>12300,'stock'=>100,'photo'=>'../image/produk/rempah/rempah9.jpg']);
        barang::create(['category_id'=>4,'name'=>'Bawang Putih[1KG]', 'price'=>98000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah10.jpg']);
        barang::create(['category_id'=>4,'name'=>'Bawang Merah [1KG]', 'price'=>60000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah11.jpg']);
        barang::create(['category_id'=>4,'name'=>'Jinten[1KG]', 'price'=>58000,'stock'=>100,'photo'=>'../image/produk/rempah/rempah12.jpg']);
    
    }
}
