<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'description', 'category_id', 'image', 'stock', 'size'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
    return $this->hasMany(OrderItem::class);
    }

}
