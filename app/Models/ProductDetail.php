<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';

    protected $fillable = [
        'product_id',
        'mfg_date',
        'exp_date',
        'price',
        'is_sell',
    ];

    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'product_id', 'id');
    }
}
