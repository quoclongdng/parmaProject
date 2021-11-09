<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'name',
        'avatar',
        'description',
        'keyword',
        'content',
        'is_open',
        'user_id',
        'newcategory_id',
    ];

    public function news_category()
    {
        return $this->belongsTo('\App\Models\NewsCategory', 'newcategory_id', 'id');
    }

}
