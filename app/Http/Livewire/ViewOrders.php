<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\OrderLine;

class ViewOrders extends Component
{
    public function render()
    {
        $orderTotals = OrderLine::select('orders.order_ref', 'orders.customer_name')
            ->selectRaw('SUM(order_lines.qty) as total_qty')
            ->join('orders', 'order_lines.order_id', '=', 'orders.id')
            ->groupBy('orders.order_ref', 'orders.customer_name')
            ->get();

        return view('livewire.view-orders', ['orderTotals' => $orderTotals]);
    }
}
