<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderLine;

class OrderDetailComponent extends Component
{
    public function render()
    {
        $orders = Order::with('orderLines.product')->get();

        foreach ($orders as $order) {
            foreach ($order->orderLines as $orderLine) {
                $order_id = $order->id;
                $line_id = $orderLine->id;
                $productInfo = [
                    'id' => $orderLine->id,
                    'qty' => $orderLine->qty,
                    'product_name' => $orderLine->product->name,
                    'product_cost' => $orderLine->product->cost,
                ];
                $orderInfo = [
                    'order_ref' => $order->order_ref,
                    'customer_name' => $order->customer_name,
                ];

                $orderedOrders[$order_id][$line_id] = $productInfo;
                $orderData[$order_id] = $orderInfo;

            }
        }

        return view('livewire.view-detail', ['orderedOrders' => $orderedOrders, 'orderData' => $orderData]);
    }
}
