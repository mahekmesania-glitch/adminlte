<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model {
    protected $fillable = ['name', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class); // belongs to a category
    }

    public function products() {
        return $this->hasMany(Product::class); // 1 subcategory -> many products
    }
}

