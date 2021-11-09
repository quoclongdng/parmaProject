<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bills';

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
        return $this->belongsTo('\App\Models\User', 'user_id', 'id');
    }
}
