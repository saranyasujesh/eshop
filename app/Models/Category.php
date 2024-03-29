<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'category');
    }

    public function trendings(): HasMany
    {
        return $this->hasMany(Product::class,'category')->where('trending_item','Yes');
    }

    public function hotitems(): HasMany
    {
        return $this->hasMany(Product::class,'category')->where('hot_item','Yes');
    }
}
