<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illumninate\Support\Facedes\DB;
use App\Models\Produk;
use Carbon\Carbon;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('produk')->insert()
        $produk = new Produk;
        $produk->insert(array(
            [
                'nama_produk' => 'Indomie Goreng',
                'kategori' => 'Makanan',
                'harga_satuan' => 35300.00,
                'stok' => 100,
                'satuan' => 'buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Sendok',
                'kategori' => 'Peralatan Dapur',
                'harga_satuan' => 40000,
                'stok' => 24,
                'satuan' => 'alat makan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Gelas',
                'kategori' => 'Peralatan Dapur',
                'harga_satuan' => 35000,
                'stok' => 18,
                'satuan' => 'alat makan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        )
        );
    }
}
