<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function chils()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
