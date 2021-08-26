<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'about',
        'discription',
        'category_id',
        'price',
        'instock',
        'image',
        'images',
        'status'

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
