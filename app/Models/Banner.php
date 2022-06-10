<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'banners';
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'status_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
