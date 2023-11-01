<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderLines = [];
        
        for ($order_id = 1; $order_id <= 20; $order_id++) {
            for ($product_id = 1; $product_id <= 10; $product_id++) {
                $orderLines[] = [
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'qty' => rand(1, 5), // Cantidad aleatoria entre 1 y 5
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('order_lines')->insert($orderLines);
    }
}
