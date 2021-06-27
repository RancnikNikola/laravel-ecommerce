<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ShopIndex extends Component
{
    public function render()
    {
        return view('livewire.shop-index', [
            'all_products' => Product::with('category')->simplePaginate(Product::PAGINATION_COUNT),
            // 'category_one' => Product::where('category_id', 1)->simplePaginate(Product::PAGINATION_COUNT),
            // 'category_two' => Product::where('category_id', 2)->simplePaginate(Product::PAGINATION_COUNT),
            // 'category_three' => Product::where('category_id', 3)->simplePaginate(Product::PAGINATION_COUNT),
            // 'category_four' => Product::where('category_id', 4)->simplePaginate(Product::PAGINATION_COUNT),
            'categories' => Category::with('products')->simplePaginate(7),
        ]);
    }
}
