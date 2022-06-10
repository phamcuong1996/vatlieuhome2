<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'code',
        'name',
        'status_id',
        'category_id',
        'image',
        'short_description',
        'description',
        'original_price',
        'price',
        'created_at',
        'type',
    ];

    public function getStatusLabelAttribute()
    {
        if ($this->status_id == config('constant.products.statuses.active')) {
            return 'Còn hàng';
        } elseif ($this->status_id == config('constant.products.statuses.inactive')) {
            return 'Hết hàng';
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
