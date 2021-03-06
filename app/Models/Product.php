<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    const PAGINATION_COUNT = 5;
    const PRODUCTS_COUNT = 9;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'id'
                ]
            ];
    }
}
