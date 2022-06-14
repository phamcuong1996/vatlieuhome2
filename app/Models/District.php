<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'district';
    protected $fillable = [
        '_name',
        '_prefix',
        '_province_id ',
    ];
}
