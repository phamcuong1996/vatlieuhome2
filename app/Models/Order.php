<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Order extends Model
{
    use SoftDeletes, HasFactory;

    const STATUS_INIT = 1;
    const STATUS_CONFIRMED = 2;
    const STATUS_DONE = 3;
    const STATUS_CANCEL = 4;

    protected $table = 'orders';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'note',
        'total_price',
        'status',
        'token',
    ];
}
