<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductIndex extends Component
{

    public $product;

    public function mount(Product $product) {

        $this->product = $product;
    }


    public function render()
    {
        return view('livewire.product-index');
    }
}
