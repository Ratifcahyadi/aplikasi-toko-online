<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 20 ; $i++) { 
            Product::create([
                'id_kategori' => rand(1, 4),
                'id_subkategori' => rand(1, 2),
                'nama_barang' => 'lorem ipsum dolor sit amet',
                'harga' => rand(5000, 100000),
                'diskon' => 0,
                'bahan' => 'lorem ipsum dolor sit amet',
                'tags' => 'nature, forest, green, landscape, beautiful, background, colorful',
                'ukuran' => '42-XL',
                'sku' => Str::random(8),
                'warna' => 'blue ocean, green, tosca',
                'gambar' => 'shop_image_' . $i . '.jpg',
                'deskripsi' => 'lorem ipsum dolor sit amet',
            ]);
        }
    }
}
