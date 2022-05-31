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
        'image',
        'category_id'
    ];
}
