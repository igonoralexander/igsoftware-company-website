<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable =
    [
        // 'cate_id',
        'title',
        // 'slug',
        'content',
        'image',
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'cate_id', 'id');
    // }
}
