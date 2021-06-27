<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class CategoryShow extends Component
{

    public $category;


    public function mount(Category $category)
    {
        $this->category = $category;
    }


    public function render()
    {

        // $products = Product::with('category')->simplePaginate(3);
        // $category = Category::with('products')->simplePaginate(3);
        $category = Category::paginate(8);
        $products = Product::paginate(8);
        // $category = Category::all();

       

        return view('livewire.category-show', [
        'products' => $products,
        'category' => $category
        
        ]);
    }

    
}
