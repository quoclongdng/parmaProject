<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $table = 'bill_details';
    protected $fillable = ['product_id',
        'mfg_date',
        'exp_date',
        'price',
    ];
}
