<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'orders_detail';
    protected $fillable = [
        'quantity',
        'product_id',
        'price',
        'order_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
