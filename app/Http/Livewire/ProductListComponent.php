<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Product;

class ProductListComponent extends Component
{
    public function render()
    {
        $products = Product::all();

        return view('livewire.view-products', ['products' => $products]);
    }
}
