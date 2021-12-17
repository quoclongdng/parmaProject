<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'content',
        'avatar',
        'productcategory_id',
        'price',
        'product_id',
    ];

    public function product_category()
    {
        return $this->belongsTo('\App\Models\ProductCategory', 'productcategory_id', 'id');
    }



}
