<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_dons';

    protected $fillable = [
        'hash',
        'user_id',
        'comment',
        'type',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo('\App\Models\Customer', 'customer_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\AdminUser', 'user_id', 'id');
    }
}
