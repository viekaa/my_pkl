<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name', 'slug'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    // mengganti kunci dari id ke slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}