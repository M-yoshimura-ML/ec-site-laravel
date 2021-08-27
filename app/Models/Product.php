<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shop(){
        return $this->belongsTo(\App\Models\Shop::class);
    }

    public function category(){
        return $this->belongsTo(\App\Models\SecondaryCategory::class, 'secondary_category_id');
    }

    public function imageFirst(){
        return $this->belongsTo(\App\Models\Image::class, 'image1', 'id');
    }

    public function stock(){
        return $this->hasMany(\App\Models\Stock::class);
    }
}
