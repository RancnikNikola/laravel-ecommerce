<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShopIndex extends Component
{
    public function render()
    {
        return view('livewire.shop-index', [
            'products' => Product::simplePaginate(5)
        ]);
    }
}
