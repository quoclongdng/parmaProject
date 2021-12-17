<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = 'bill_details';
    protected $fillable = [
        'bill_id',
        'product_id',
        'price',
        'quantity',
    ];

    public function bill()
    {
        return $this->belongsTo('\App\Models\hoaDon', 'bill_id', 'id');
    }

    public function product_detail()
    {
        return $this->belongsTo('\App\Models\ProductDetail', 'productdetail_id', 'id');
    }

}
