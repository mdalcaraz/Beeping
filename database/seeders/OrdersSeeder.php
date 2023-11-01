<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            ["id" => 1, "order_ref" => "Orden N°1", "customer_name" => "Juan"],
            ["id" => 2, "order_ref" => "Orden N°2", "customer_name" => "María"],
            ["id" => 3, "order_ref" => "Orden N°3", "customer_name" => "Pedro"],
            ["id" => 4, "order_ref" => "Orden N°4", "customer_name" => "Ana"],
            ["id" => 5, "order_ref" => "Orden N°5", "customer_name" => "Carlos"],
            ["id" => 6, "order_ref" => "Orden N°6", "customer_name" => "Luisa"],
            ["id" => 7, "order_ref" => "Orden N°7", "customer_name" => "Sofía"],
            ["id" => 8, "order_ref" => "Orden N°8", "customer_name" => "Andrés"],
            ["id" => 9, "order_ref" => "Orden N°9", "customer_name" => "Laura"],
            ["id" => 10, "order_ref" => "Orden N°10", "customer_name" => "Daniel"],
            ["id" => 11, "order_ref" => "Orden N°11", "customer_name" => "Marta"],
            ["id" => 12, "order_ref" => "Orden N°12", "customer_name" => "Javier"],
            ["id" => 13, "order_ref" => "Orden N°13", "customer_name" => "Elena"],
            ["id" => 14, "order_ref" => "Orden N°14", "customer_name" => "Raúl"],
            ["id" => 15, "order_ref" => "Orden N°15", "customer_name" => "Isabel"],
            ["id" => 16, "order_ref" => "Orden N°16", "customer_name" => "Hugo"],
            ["id" => 17, "order_ref" => "Orden N°17", "customer_name" => "Carolina"],
            ["id" => 18, "order_ref" => "Orden N°18", "customer_name" => "Martín"],
            ["id" => 19, "order_ref" => "Orden N°19", "customer_name" => "Patricia"],
            ["id" => 20, "order_ref" => "Orden N°20", "customer_name" => "Roberto"]
        ];
        DB::table('orders')->insert($orders);
    }
}
