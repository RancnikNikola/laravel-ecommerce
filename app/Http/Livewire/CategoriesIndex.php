<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesIndex extends Component
{
    public function render()
    {
        return view('livewire.categories-index', [
            'categories' => Category::all(),
        ]);
    }
}
