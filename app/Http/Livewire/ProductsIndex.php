<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsIndex extends Component
{
    public function render()
    {
        $all_products = Product::paginate(8);

        return view('livewire.products-index', [
            'all_products' => $all_products,
        ]);
    }
}
