<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Procesador Intel Core i7',
                'cost' => 299.99,
            ],
            [
                'id' => 2,
                'name' => 'Tarjeta gráfica NVIDIA GeForce RTX 3080',
                'cost' => 699.99,
            ],
            [
                'id' => 3,
                'name' => 'Memoria RAM Corsair Vengeance LPX 16GB',
                'cost' => 79.99,
            ],
            [
                'id' => 4,
                'name' => 'Disco duro SSD Samsung 1TB',
                'cost' => 129.99,
            ],
            [
                'id' => 5,
                'name' => 'Placa base ASUS ROG Strix Z590',
                'cost' => 219.99,
            ],
            [
                'id' => 6,
                'name' => 'Fuente de alimentación EVGA 750W',
                'cost' => 89.99,
            ],
            [
                'id' => 7,
                'name' => 'Refrigeración líquida  Kraken X63',
                'cost' => 129.99,
            ],
            [
                'id' => 8,
                'name' => 'Monitor LG UltraGear 27" 144Hz',
                'cost' => 299.99,
            ],
            [
                'id' => 9,
                'name' => 'Teclado mecánico Logitech G Pro X',
                'cost' => 129.99,
            ],
            [
                'id' => 10,
                'name' => 'Mouse gaming SteelSeries Rival 600',
                'cost' => 69.99,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
